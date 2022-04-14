<?php

namespace PCloud\PCloud\Schema\Input\File\DeleteFile;

use PCloud\PCloud\Adapters\DeleteFileInterface;
use PCloud\PCloud\Schema\Core\InputSchemaTrait;

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