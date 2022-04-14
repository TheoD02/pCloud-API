<?php

namespace PCloud\PCloud\Schema\Input\Folder\ListFolder;

use PCloud\PCloud\Adapters\ListFolderInterface;
use PCloud\PCloud\Schema\Core\InputSchemaTrait;

class ListFolderWithIdInput implements ListFolderInterface
{
    use InputSchemaTrait;

    public function __construct(
        protected int $folderId
    )
    {
    }

    /**
     * @return int
     */
    public function getFolderId(): int
    {
        return $this->folderId;
    }

    /**
     * @param int $folderId
     * @return ListFolderWithFolderIdInput
     */
    public function setFolderId(int $folderId): ListFolderWithFolderIdInput
    {
        $this->folderId = $folderId;
        return $this;
    }
}