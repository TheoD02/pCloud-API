<?php

namespace App\PCloud\Schema\Input\File;

class PCloudFile
{
    private $contents;

    /**
     * @param $contentOrStream
     * @param string $filename
     * @param string|null $path
     * @throws \Exception
     * @TODO : Support other parameters
     */
    public function __construct(
        $contentOrStream,
        private ?string $filename = null,
        private ?string $path = null,
        //private ?bool $renameIfExist = true,
        //private ?bool $noPartial = true,
        //private ?string $progressHash = null,
        //private ?int $modificationTimestamp = null,
        //private ?int $creationTimestamp = null,
    )
    {
        if (is_resource($contentOrStream)) {
            $this->contents = $contentOrStream;
        } else if (is_file($contentOrStream)) {
            $this->contents = fopen($contentOrStream, 'rb+');
        } else {
            throw new \Exception('Not supported yet, need maybe improve here.');
        }
    }

    /**
     * @return mixed
     */
    public function getContents(): mixed
    {
        return $this->contents;
    }

    /**
     * @param mixed $contents
     * @return PCloudFile
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return PCloudFile
     */
    public function setFilename(?string $filename): PCloudFile
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string|null $path
     * @return PCloudFile
     */
    public function setPath(?string $path): PCloudFile
    {
        $this->path = $path;
        return $this;
    }
}