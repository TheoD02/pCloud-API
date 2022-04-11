<?php

namespace App\PCloud\Schema\Input\Folder\Delete;

use App\PCloud\Adapters\DeleteFolderInterface;
use App\PCloud\Schema\Core\InputSchemaTrait;

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