<?php

namespace App\PCloud\Schema\Input;

use App\Utils\ArrayUtils;

class Tree
{
    public function __construct(
        private array $folderIds = [],
        private array $fileIds = [],
        private array $excludedFolderIds = [],
        private array $excludedFileIds = [],
    )
    {

    }

    /**
     * @return int|array
     */
    public function getFolderIds(): int|array
    {
        return count($this->folderIds) === 1 ? $this->folderIds[0] : ArrayUtils::uniqueArrayValue($this->folderIds);
    }

    /**
     * @param int[] $folderIds
     * @return Tree
     */
    public function setFolderIds(array $folderIds): Tree
    {
        $this->folderIds = $folderIds;
        return $this;
    }

    /**
     * @return array
     */
    public function getFileIds(): array
    {
        return ArrayUtils::uniqueArrayValue($this->fileIds);
    }

    /**
     * @param int[] $fileIds
     * @return Tree
     */
    public function setFileIds(array $fileIds): Tree
    {
        $this->fileIds = $fileIds;
        return $this;
    }

    /**
     * @return array
     */
    public function getExcludedFolderIds(): array
    {
        return ArrayUtils::uniqueArrayValue($this->excludedFolderIds);
    }

    /**
     * @param int[] $excludedFolderIds
     * @return Tree
     */
    public function setExcludedFolderIds(array $excludedFolderIds): Tree
    {
        $this->excludedFolderIds = $excludedFolderIds;
        return $this;
    }

    /**
     * @return array
     */
    public function getExcludedFileIds(): array
    {
        return ArrayUtils::uniqueArrayValue($this->excludedFileIds);
    }

    /**
     * @param int[] $excludedFileIds
     * @return Tree
     */
    public function setExcludedFileIds(array $excludedFileIds): Tree
    {
        $this->excludedFileIds = $excludedFileIds;
        return $this;
    }

    /**
     * @param int $fileId
     * @return $this
     */
    public function addExcludedFileId(int $fileId): Tree
    {
        $this->excludedFileIds[] = $fileId;
        return $this;
    }

    /**
     * @param int $folderId
     * @return $this
     */
    public function addExcludedFolderId(int $folderId): Tree
    {
        $this->excludedFolderIds[] = $folderId;
        return $this;
    }

    /**
     * @param int $fileId
     * @return $this
     */
    public function addFileId(int $fileId): Tree
    {
        $this->fileIds[] = $fileId;
        return $this;
    }

    /**
     * @param int $folderId
     * @return $this
     */
    public function addFolderId(int $folderId): Tree
    {
        $this->folderIds[] = $folderId;
        return $this;
    }
}