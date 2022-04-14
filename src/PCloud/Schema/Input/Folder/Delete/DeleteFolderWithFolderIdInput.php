<?php

namespace PCloud\PCloud\Schema\Input\Folder\Delete;

use PCloud\PCloud\Adapters\DeleteFolderInterface;
use PCloud\PCloud\Schema\Core\InputSchemaTrait;

class DeleteFolderWithFolderIdInput implements DeleteFolderInterface
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
     * @return DeleteFolderWithFolderIdInput
     */
    public function setFolderId(int $folderId): DeleteFolderWithFolderIdInput
    {
        $this->folderId = $folderId;
        return $this;
    }
}