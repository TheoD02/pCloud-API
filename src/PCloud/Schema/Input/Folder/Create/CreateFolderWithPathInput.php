<?php

namespace App\PCloud\Schema\Input\Folder\Create;


use App\PCloud\Adapters\CreateFolderInterface;
use App\PCloud\Schema\Core\InputSchemaTrait;

class CreateFolderWithPathInput implements CreateFolderInterface
{
    use InputSchemaTrait;

    public function __construct(
        protected string $path,
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
     * @return CreateFolderWithPathInput
     */
    public function setPath(string $path): CreateFolderWithPathInput
    {
        $this->path = $path;
        return $this;
    }
}