<?php

namespace PCloud\PCloud\Schema\Input\File\DeleteFile;

use PCloud\PCloud\Adapters\DeleteFileInterface;
use PCloud\PCloud\Schema\Core\InputSchemaTrait;

class DeleteFileWithFilePathInput implements DeleteFileInterface
{
    use InputSchemaTrait;

    public function __construct(
        protected  string $path,
    )
    {
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
     * @return DeleteFileWithFilePathInput
     */
    public function setPath(string $path): DeleteFileWithFilePathInput
    {
        $this->path = $path;
        return $this;
    }
}