<?php

namespace App\PCloud\Schema\Input\Folder\Create;

use App\PCloud\Adapters\CreateFolderInterface;
use App\PCloud\Schema\Core\InputSchemaTrait;

class CreateFolderWithFolderIdInput implements CreateFolderInterface
{
    use InputSchemaTrait;

    public function __construct(
        protected string $name,
        protected int    $folderId,
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
     * @return CreateFolderWithPathInput
     */
    public function setFolderId(int $folderId): CreateFolderWithPathInput
    {
        $this->folderId = $folderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CreateFolderWithPathInput
     */
    public function setName(string $name): CreateFolderWithPathInput
    {
        $this->name = $name;
        return $this;
    }
}