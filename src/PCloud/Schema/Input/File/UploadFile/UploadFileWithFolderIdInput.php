<?php

namespace App\PCloud\Schema\Input\File\UploadFile;

use App\PCloud\Adapters\UploadFileInterface;
use App\PCloud\Schema\Core\InputSchemaTrait;
use App\PCloud\Schema\Input\File\PCloudFile;

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
}