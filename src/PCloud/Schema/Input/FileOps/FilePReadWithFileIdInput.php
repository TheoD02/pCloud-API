<?php

namespace PCloud\PCloud\Schema\Input\FileOps;

use PCloud\PCloud\Schema\Core\InputSchemaTrait;
use PCloud\PCloud\Schema\Output\FileOps\FileOperationOpenOutput;

class FilePReadWithFileIdInput
{
    use InputSchemaTrait;

    protected int $fd;

    public function __construct(
        FileOperationOpenOutput $fileOperationOpenOutput,
        protected int           $count = 1000,
        protected int           $offset = 0,
    )
    {
        $this->fd = $fileOperationOpenOutput->getFd();
    }

    /**
     * @return int|string|null
     */
    public function getFd(): int|string|null
    {
        return $this->fd;
    }

    /**
     * @param int|string|null $fd
     * @return FilePReadWithFileIdInput
     */
    public function setFd(int|string|null $fd): FilePReadWithFileIdInput
    {
        $this->fd = $fd;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return FilePReadWithFileIdInput
     */
    public function setCount(int $count): FilePReadWithFileIdInput
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return FilePReadWithFileIdInput
     */
    public function setOffset(int $offset): FilePReadWithFileIdInput
    {
        $this->offset = $offset;
        return $this;
    }
}