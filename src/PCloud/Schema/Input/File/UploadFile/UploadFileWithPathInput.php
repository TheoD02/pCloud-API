<?php

namespace PCloud\PCloud\Schema\Input\File\UploadFile;

use PCloud\PCloud\Adapters\UploadFileInterface;

class UploadFileWithPathInput extends BaseUploadFileInput implements UploadFileInterface
{
    public function __construct(
        protected string $path = '/',
        array            $files = []
    )
    {
        parent::__construct($files);
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return UploadFileWithPathInput
     */
    public function setPath(string $path): UploadFileWithPathInput
    {
        $this->path = $path;
        return $this;
    }

    public function toArray(): array
    {
        return [['name' => 'path', 'contents' => $this->path], ...$this->getFiles()];
    }
}