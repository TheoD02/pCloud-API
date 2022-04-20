<?php

namespace PCloud\PCloud\Schema\Input\FileOps;

use PCloud\Enum\PCloudFileOperation;
use PCloud\PCloud\Schema\Core\InputSchemaTrait;

class FileOpenWithFileIdInput
{
    use InputSchemaTrait;

    public function __construct(
        protected int                  $fileId,
        protected PCloudFileOperation $flags,
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
     * @return FileOpenWithFileIdInput
     */
    public function setFileId(int $fileId): FileOpenWithFileIdInput
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlags(): string
    {
        return $this->flags->value;
    }

    /**
     * @param PCloudFileOperation $flags
     * @return FileOpenWithFileIdInput
     */
    public function setFlags(PCloudFileOperation $flags): FileOpenWithFileIdInput
    {
        $this->flags = $flags;
        return $this;
    }
}