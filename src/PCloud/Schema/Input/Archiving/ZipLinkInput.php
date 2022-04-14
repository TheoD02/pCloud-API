<?php

namespace PCloud\PCloud\Schema\Input\Archiving;

use PCloud\PCloud\Schema\Input\Tree;

class ZipLinkInput
{
    public function __construct(
        private Tree    $tree,
        private ?int    $maxSpeed = null,
        private ?string $filename = null,
        private bool    $forceDownload = false,
        private ?string $timeOffset = null,
    )
    {

    }

    /**
     * @return Tree
     */
    public function getTree(): Tree
    {
        return $this->tree;
    }

    /**
     * @param Tree $tree
     * @return ZipLinkInput
     */
    public function setTree(Tree $tree): ZipLinkInput
    {
        $this->tree = $tree;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxSpeed(): ?int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int|null $maxSpeed
     * @return ZipLinkInput
     */
    public function setMaxSpeed(?int $maxSpeed): ZipLinkInput
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param string|null $filename
     * @return ZipLinkInput
     */
    public function setFilename(?string $filename): ZipLinkInput
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return bool
     */
    public function isForceDownload(): bool
    {
        return $this->forceDownload;
    }

    /**
     * @param bool $forceDownload
     * @return ZipLinkInput
     */
    public function setForceDownload(bool $forceDownload): ZipLinkInput
    {
        $this->forceDownload = $forceDownload;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTimeOffset(): ?string
    {
        return $this->timeOffset;
    }

    /**
     * @param string|null $timeOffset
     * @return ZipLinkInput
     */
    public function setTimeOffset(?string $timeOffset): ZipLinkInput
    {
        $this->timeOffset = $timeOffset;
        return $this;
    }
}