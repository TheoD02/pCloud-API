<?php

namespace PCloud\PCloud\Schema\Input\Folder\Delete;

use PCloud\PCloud\Adapters\DeleteFolderInterface;
use PCloud\PCloud\Schema\Core\InputSchemaTrait;

class DeleteFolderWithPathInput implements DeleteFolderInterface
{
    use InputSchemaTrait;

    public function __construct(
        protected string $path
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
     * @return DeleteFolderWithPathInput
     */
    public function setPath(string $path): DeleteFolderWithPathInput
    {
        $this->path = $path;
        return $this;
    }
}