<?php

namespace App\PCloud\Schema\Input\File\UploadFile;

use App\PCloud\Adapters\UploadFileInterface;
use App\PCloud\Schema\Core\InputSchemaTrait;
use App\PCloud\Schema\Input\File\PCloudFile;

class UploadFileWithFolderIdInput implements UploadFileInterface
{
    use InputSchemaTrait;

    public function __construct(
        protected array $files = [],
        protected int   $folderId = 0,
    )
    {
    }

    /**
     * @return PCloudFile[]
     */
    public function getFiles(): array
    {
        $files = [];
        foreach ($this->files as $k => $file) {
            $files[$k] = [
                'name' => "file-$k",
                'contents' => is_resource($file->getContents()) ? $file->getContents() : fopen($file->getContents(), 'rb+'),
                'filename' => $file->getFilename(),
            ];
        }
        return $files;
    }

    /**
     * @param PCloudFile[] $files
     * @return UploadFileWithFolderIdInput
     */
    public function setFiles(array $files): UploadFileWithFolderIdInput
    {
        $this->files = $files;
        return $this;
    }

    /**
     * @param PCloudFile $file
     * @return UploadFileWithFolderIdInput
     */
    public function addFile(PCloudFile $file): UploadFileWithFolderIdInput
    {
        $this->files[] = $file;
        return $this;
    }

    /**
     * @return int
     */
    public function getFolderId(): int
    {
        return $this->folderId;
    }

    /**
     * @param int $folderId
     * @return UploadFileWithFolderIdInput
     */
    public function setFolderId(int $folderId): UploadFileWithFolderIdInput
    {
        $this->folderId = $folderId;
        return $this;
    }
}