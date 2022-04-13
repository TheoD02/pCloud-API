<?php

namespace App\PCloud\Schema\Input\File\UploadFile;

use App\PCloud\Adapters\UploadFileInterface;

class UploadFileWithFolderIdInput extends BaseUploadFileInput implements UploadFileInterface
{
    public function __construct(
        protected int $folderId = 0,
        array         $files = []
    )
    {
        parent::__construct($files);
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

    public function toArray(): array
    {
        return [['name' => 'folderid', 'contents' => $this->folderId], ...$this->getFiles()];
    }
}