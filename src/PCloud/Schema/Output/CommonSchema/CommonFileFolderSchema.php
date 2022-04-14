<?php

namespace PCloud\PCloud\Schema\Output\CommonSchema;

use PCloud\PCloud\Schema\Core\OutputSchemaTrait;
use DateTime;

class CommonFileFolderSchema
{
    use OutputSchemaTrait;

    protected ?int $comments = null;
    protected ?string $path = null;
    protected ?int $parentFolderId = null;
    protected ?int $folderId = null;
    protected ?bool $isFolder = null;
    // IF MINE IS FALSE (4 fields provided [canread/modify/delete/create])
    protected ?bool $isMine = null;
    protected ?bool $canRead = true;
    protected ?bool $canModify = true;
    protected ?bool $canDelete = true;

    protected ?bool $isShared = null;

    protected ?int $id = null;
    protected ?string $name = null;

    protected ?DateTime $modified = null;
    protected ?DateTime $created = null;

    protected ?string $icon = null;
    protected ?bool $thumb = null;
    protected ?bool $isDeleted = null;

    /**
     * @return int|null
     */
    public function getComments(): ?int
    {
        return $this->comments;
    }

    /**
     * @param int|null $comments
     * @return CommonFileFolderSchema
     */
    public function setComments(?int $comments): CommonFileFolderSchema
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string|null $path
     * @return CommonFileFolderSchema
     */
    public function setPath(?string $path): CommonFileFolderSchema
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getParentFolderId(): ?int
    {
        return $this->parentFolderId;
    }

    /**
     * @param int|null $parentFolderId
     * @return CommonFileFolderSchema
     */
    public function setParentFolderId(?int $parentFolderId): CommonFileFolderSchema
    {
        $this->parentFolderId = $parentFolderId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFolderId(): ?int
    {
        return $this->folderId;
    }

    /**
     * @param int|null $folderId
     * @return CommonFileFolderSchema
     */
    public function setFolderId(?int $folderId): CommonFileFolderSchema
    {
        $this->folderId = $folderId;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsFolder(): ?bool
    {
        return $this->isFolder;
    }

    /**
     * @param bool|null $isFolder
     * @return CommonFileFolderSchema
     */
    public function setIsFolder(?bool $isFolder): CommonFileFolderSchema
    {
        $this->isFolder = $isFolder;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsMine(): ?bool
    {
        return $this->isMine;
    }

    /**
     * @param bool|null $isMine
     * @return CommonFileFolderSchema
     */
    public function setIsMine(?bool $isMine): CommonFileFolderSchema
    {
        $this->isMine = $isMine;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanRead(): ?bool
    {
        return $this->canRead;
    }

    /**
     * @param bool|null $canRead
     * @return CommonFileFolderSchema
     */
    public function setCanRead(?bool $canRead): CommonFileFolderSchema
    {
        $this->canRead = $canRead;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanModify(): ?bool
    {
        return $this->canModify;
    }

    /**
     * @param bool|null $canModify
     * @return CommonFileFolderSchema
     */
    public function setCanModify(?bool $canModify): CommonFileFolderSchema
    {
        $this->canModify = $canModify;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanDelete(): ?bool
    {
        return $this->canDelete;
    }

    /**
     * @param bool|null $canDelete
     * @return CommonFileFolderSchema
     */
    public function setCanDelete(?bool $canDelete): CommonFileFolderSchema
    {
        $this->canDelete = $canDelete;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsShared(): ?bool
    {
        return $this->isShared;
    }

    /**
     * @param bool|null $isShared
     * @return CommonFileFolderSchema
     */
    public function setIsShared(?bool $isShared): CommonFileFolderSchema
    {
        $this->isShared = $isShared;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return CommonFileFolderSchema
     */
    public function setId(?int $id): CommonFileFolderSchema
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return CommonFileFolderSchema
     */
    public function setName(?string $name): CommonFileFolderSchema
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getModified(): ?DateTime
    {
        return $this->modified;
    }

    /**
     * @param DateTime|null $modified
     * @return CommonFileFolderSchema
     */
    public function setModified(?DateTime $modified): CommonFileFolderSchema
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getCreated(): ?DateTime
    {
        return $this->created;
    }

    /**
     * @param DateTime|null $created
     * @return CommonFileFolderSchema
     */
    public function setCreated(?DateTime $created): CommonFileFolderSchema
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @param string|null $icon
     * @return CommonFileFolderSchema
     */
    public function setIcon(?string $icon): CommonFileFolderSchema
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getThumb(): ?bool
    {
        return $this->thumb;
    }

    /**
     * @param bool|null $thumb
     * @return CommonFileFolderSchema
     */
    public function setThumb(?bool $thumb): CommonFileFolderSchema
    {
        $this->thumb = $thumb;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    /**
     * @param bool|null $isDeleted
     * @return CommonFileFolderSchema
     */
    public function setIsDeleted(?bool $isDeleted): CommonFileFolderSchema
    {
        $this->isDeleted = $isDeleted;
        return $this;
    }
}