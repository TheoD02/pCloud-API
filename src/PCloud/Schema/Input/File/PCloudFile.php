<?php

namespace PCloud\PCloud\Schema\Input\File;

class PCloudFile
{
    private string $content;

    /**
     * @param string $content
     * @param string $filename
     * @param string|null $path
     * @throws \Exception
     * @TODO : Support other parameters
     */
    public function __construct(
        string          $content,
        private string  $filename,
        private ?string $path = null,
        //private ?bool $renameIfExist = true,
        //private ?bool $noPartial = true,
        //private ?string $progressHash = null,
        //private ?int $modificationTimestamp = null,
        //private ?int $creationTimestamp = null,
    )
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return PCloudFile
     */
    public function setContent(string $content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return PCloudFile
     */
    public function setFilename(string $filename): PCloudFile
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
