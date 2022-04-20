<?php

namespace PCloud\PCloud\Schema\Output\FileOps;

use PCloud\PCloud\Schema\Core\OutputSchemaTrait;

class FileOperationOpenOutput
{
    use OutputSchemaTrait;

    private ?int $result = null;
    private ?int $fd = null;
    private ?int $fileId = null;

    /**
     * @return int|null
     */
    public function getResult(): ?int
    {
        return $this->result;
    }

    /**
     * @param int|null $result
     * @return FileOperationOpenOutput
     */
    public function setResult(?int $result): FileOperationOpenOutput
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFd(): ?int
    {
        return $this->fd;
    }

    /**
     * @param int|null $fd
     * @return FileOperationOpenOutput
     */
    public function setFd(?int $fd): FileOperationOpenOutput
    {
        $this->fd = $fd;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFileId(): ?int
    {
        return $this->fileId;
    }

    /**
     * @param int|null $fileId
     * @return FileOperationOpenOutput
     */
    public function setFileId(?int $fileId): FileOperationOpenOutput
    {
        $this->fileId = $fileId;
        return $this;
    }
}