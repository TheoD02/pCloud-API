<?php

namespace App\PCloud\Schema\Input\Folder\ListFolder;

use App\PCloud\Adapters\ListFolderInterface;
use App\PCloud\Schema\Core\InputSchemaTrait;

class ListFolderWithPathInput implements ListFolderInterface
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
     * @return ListFolderWithPathInput
     */
    public function setPath(string $path): ListFolderWithPathInput
    {
        $this->path = $path;
        return $this;
    }
}