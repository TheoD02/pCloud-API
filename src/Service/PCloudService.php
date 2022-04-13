<?php

namespace App\Service;

use App\Client\HttpClientSingleton;
use App\Enum\PCloudMethods;
use App\Enum\PCloudServer;
use App\Exceptions\NoFileToUploadException;
use App\Exceptions\NotLoggedException;
use App\Exceptions\PCloudApiError;
use App\PCloud\Adapters\CreateFolderInterface;
use App\PCloud\Adapters\DeleteFileInterface;
use App\PCloud\Adapters\DeleteFolderInterface;
use App\PCloud\Adapters\ListFolderInterface;
use App\PCloud\Adapters\StreamAudioInterface;
use App\PCloud\Adapters\UploadFileInterface;
use App\PCloud\Schema\Output\File\DeleteFileOutput;
use App\PCloud\Schema\Output\File\UploadFileOutput;
use App\PCloud\Schema\Output\Folder\CreateFolderOutput;
use App\PCloud\Schema\Output\Folder\DeleteFolderOutput;
use App\PCloud\Schema\Output\Folder\ListFolderOutput;
use App\PCloud\Schema\Output\Streaming\Audio\StreamAudioOutput;
use App\PCloud\Schema\Output\UserInfoScheme;
use GuzzleHttp\Client;

class PCloudService
{
    private ?Client $client;
    private ?UserInfoScheme $userInfo = null;
    private bool $haveAlreadyAttemptLogin = false;

    public function __construct(
        ?string      $username = null,
        ?string      $password = null,
        PCloudServer $server = PCloudServer::EU_API
    )
    {
        $this->userInfo = new UserInfoScheme();
        $this->client = HttpClientSingleton::getClient($server);
        if (is_string($username) && is_string($password)) {
            $this->login($username, $password);
        }
    }

    /**
     * @return UserInfoScheme|null
     */
    public function getUserInfo(): ?UserInfoScheme
    {
        return $this->userInfo;
    }

    private function request(string $method, PCloudMethods $pCloudMethods, $options)
    {
        if (true === $this->haveAlreadyAttemptLogin && null === $this->userInfo->getAuth()) {
            throw new NotLoggedException('Not logged to pCloud API! Check credentials or API Server.');
        }
        if ($this->userInfo->getAuth()) {
            $options['query']['auth'] = $this->userInfo->getAuth();
        }
        $data = json_decode($this->client->request($method, $pCloudMethods->value, $options)->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
        if (0 !== $data['result']) {
            throw new PCloudApiError($data['error']);
        }
        return $data;
    }

    public function login(string $username, string $password): bool
    {
        $responseData = $this->request('POST', PCloudMethods::USER_INFO, [
            'form_params' => [
                'username' => $username,
                'password' => $password,
                'getauth' => 1
            ]
        ]);
        $this->haveAlreadyAttemptLogin = true;
        $this->userInfo->setDataFromResponse($responseData);
        return (bool)($this->userInfo->getAuth() ?? false);
    }

    public function createFolder(CreateFolderInterface $createFolderInput, bool $createFolderIfNotExist = false): CreateFolderOutput
    {
        $pCloudMethod = $createFolderIfNotExist ? PCloudMethods::CREATE_FOLDER_IF_NOT_EXIST : PCloudMethods::CREATE_FOLDER;
        $data = $this->request('POST', $pCloudMethod, ['form_params' => $createFolderInput->toArray()]);
        return (new CreateFolderOutput())->setDataFromResponse($data);
    }

    public function listFolder(ListFolderInterface $listFolderInput, bool $noFiles = true, bool $recursive = false, bool $showDeleted = false, bool $noSharedFolders = true): ListFolderOutput
    {
        return (new ListFolderOutput())->setDataFromResponse(
            $this->request('POST', PCloudMethods::LIST_FOLDER, [
                    'form_params' => [
                        ...$listFolderInput->toArray(),
                        'recursive' => $recursive,
                        'showdeleted' => $showDeleted,
                        'nofiles' => $noFiles,
                        'noshares' => $noSharedFolders,
                    ]
                ]
            )
        );
    }

    public function deleteFolder(DeleteFolderInterface $deleteFolderInput, bool $recursive = false): DeleteFolderOutput
    {
        $pCloudMethod = $recursive ? PCloudMethods::DELETE_FOLDER_RECURSIVE : PCloudMethods::DELETE_FOLDER;
        return (new DeleteFolderOutput())->setDataFromResponse($this->request('POST', $pCloudMethod, ['form_params' => $deleteFolderInput->toArray()]));
    }

    /**
     * @param UploadFileInterface $uploadFileInput
     * @return UploadFileOutput
     * @throws NoFileToUploadException
     * @throws NotLoggedException
     * @throws PCloudApiError
     * @throws \JsonException
     * @TODO : Parameters not working with multiple file (not tested with only one file)
     */
    public function uploadFile(UploadFileInterface $uploadFileInput): UploadFileOutput
    {
        if (0 === count($uploadFileInput->getFiles())) {
            throw new NoFileToUploadException('No file was set to upload, please use setFiles() or addFiles() functions.');
        }
        return (new UploadFileOutput())->setDataFromResponse(
            $this->request('POST', PCloudMethods::UPLOAD_FILE, [
                'query' => $uploadFileInput->toArray(),
                'multipart' => $uploadFileInput->getFiles(),
            ])
        );
    }

    public function deleteFile(DeleteFileInterface $deleteFileInput)
    {
        return (new DeleteFileOutput())->setDataFromResponse(
            $this->request('POST', PCloudMethods::DELETE_FILE, ['form_params' => $deleteFileInput->toArray()])
        );
    }

    public function streamAudioLink(StreamAudioInterface $streamAudioInput)
    {
        return (new StreamAudioOutput())->setDataFromResponse(
            $this->request('POST', PCloudMethods::GET_AUDIO_LINK, [
                'form_params' => $streamAudioInput->toArray(),
            ])
        );
    }
}