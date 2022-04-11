<?php

namespace App\PCloud\Schema\Input\File\DeleteFile;

use App\PCloud\Adapters\DeleteFileInterface;
use App\PCloud\Schema\Core\InputSchemaTrait;

class DeleteFileWithFileIdInput implements DeleteFileInterface
{
    use InputSchemaTrait;

    public function __construct(
        protected int $fileId,
    )
    {
    }

    /**
     * @return int
     */
    public function getFileId(): int
    {
        return $this->fileId;
    }

    /**
     * @param int $fileId
     * @return DeleteFileWithFileIdInput
     */
    public function setFileId(int $fileId): DeleteFileWithFileIdInput
    {
        $this->fileId = $fileId;
        return $this;
    }
}