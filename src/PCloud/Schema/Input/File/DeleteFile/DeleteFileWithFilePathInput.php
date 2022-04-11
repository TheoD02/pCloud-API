<?php

namespace App\PCloud\Schema\Input\File\DeleteFile;

use App\PCloud\Adapters\DeleteFileInterface;
use App\PCloud\Schema\Core\InputSchemaTrait;

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