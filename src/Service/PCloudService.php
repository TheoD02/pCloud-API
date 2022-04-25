<?php

namespace PCloud\Service;

use PCloud\Client\HttpClientSingleton;
use PCloud\Enum\PCloudMethods;
use PCloud\Enum\PCloudServer;
use PCloud\Exceptions\NoFileToUploadException;
use PCloud\Exceptions\NotLoggedException;
use PCloud\Exceptions\PCloudApiError;
use PCloud\PCloud\Adapters\CreateFolderInterface;
use PCloud\PCloud\Adapters\DeleteFileInterface;
use PCloud\PCloud\Adapters\DeleteFolderInterface;
use PCloud\PCloud\Adapters\ListFolderInterface;
use PCloud\PCloud\Adapters\StreamAudioInterface;
use PCloud\PCloud\Adapters\UploadFileInterface;
use PCloud\PCloud\Schema\Input\FileOps\FileOpenWithFileIdInput;
use PCloud\PCloud\Schema\Input\FileOps\FilePReadWithFileIdInput;
use PCloud\PCloud\Schema\Input\FileOps\FileReadWithFileIdInput;
use PCloud\PCloud\Schema\Output\File\DeleteFileOutput;
use PCloud\PCloud\Schema\Output\File\UploadFileOutput;
use PCloud\PCloud\Schema\Output\FileOps\FileOperationOpenOutput;
use PCloud\PCloud\Schema\Output\Folder\CreateFolderOutput;
use PCloud\PCloud\Schema\Output\Folder\DeleteFolderOutput;
use PCloud\PCloud\Schema\Output\Folder\ListFolderOutput;
use PCloud\PCloud\Schema\Output\Streaming\Audio\StreamAudioOutput;
use PCloud\PCloud\Schema\Output\UserInfoScheme;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

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

    /**
     * @param string $method
     * @param PCloudMethods $pCloudMethods
     * @param $options
     * @param bool $async
     *
     * @return \GuzzleHttp\Promise\PromiseInterface|array
     *
     * @throws NotLoggedException
     * @throws PCloudApiError
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     */
    private function request(string $method, PCloudMethods $pCloudMethods, $options, bool $async = false): \GuzzleHttp\Promise\PromiseInterface|array
    {
        if (true === $this->haveAlreadyAttemptLogin && null === $this->userInfo->getAuth()) {
            throw new NotLoggedException('Not logged to pCloud API! Check credentials or API Server.');
        }
        if ($this->userInfo->getAuth()) {
            $options['query']['auth'] = $this->userInfo->getAuth();
        }
        if ($async) {
            return $this->client->requestAsync($method, $pCloudMethods->value, $options);
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
                'getauth' => 1,
                'logout' => 1,
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
     * @param bool $async
     * @return UploadFileOutput|\GuzzleHttp\Promise\PromiseInterface
     * @throws NoFileToUploadException
     * @throws NotLoggedException
     * @throws PCloudApiError
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonException
     * @TODO : Parameters not working with multiple file (not tested with only one file)
     */
    public function uploadFile(UploadFileInterface $uploadFileInput, bool $async = false): UploadFileOutput|\GuzzleHttp\Promise\PromiseInterface
    {
        if (0 === count($uploadFileInput->getFiles())) {
            throw new NoFileToUploadException('No file was set to upload, please use setFiles() or addFiles() functions.');
        }
        $request = $this->request('POST', PCloudMethods::UPLOAD_FILE, [
            'multipart' => $uploadFileInput->toArray(),
        ]);
        if ($async) {
            return $request;
        }
        return (new UploadFileOutput())->setDataFromResponse(
            $this->request('POST', PCloudMethods::UPLOAD_FILE, [
                'multipart' => $uploadFileInput->toArray(),
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

    public function fileOperationOpen(FileOpenWithFileIdInput $fileOpenWithFileId)
    {
        return (new FileOperationOpenOutput())->setDataFromResponse(
            $this->request('POST', PCloudMethods::FILE_OPEN, [
                'query' => $fileOpenWithFileId->toArray(),
            ])
        );
    }

    public function fileOperationRead(FilePReadWithFileIdInput $filePReadWithFileIdInput)
    {
        return (new FileOperationOpenOutput())->setDataFromResponse(
            $this->request('POST', PCloudMethods::FILE_PREAD, [
                'query' => $filePReadWithFileIdInput->toArray(),
            ])
        );
    }

    public function fileOperationClose(?int $getFd)
    {
        return $this->request('POST', PCloudMethods::FILE_CLOSE, [
            'query' => ['fd' => $getFd],
        ]);
    }

    public function fileSize(?int $getFd)
    {
        return $this->request('POST', PCloudMethods::FILE_CLOSE, [
            'query' => ['fd' => $getFd],
        ]);
    }
}