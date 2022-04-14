<?php

namespace PCloud\PCloud\Schema\Input\Archiving;

use PCloud\PCloud\Schema\Input\Tree;

class ZipInput
{
    public function __construct(
        private Tree $tree,
        private string $filename,
        private bool $forceDownload = false,
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
     * @return ZipInput
     */
    public function setTree(Tree $tree): ZipInput
    {
        $this->tree = $tree;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return ZipInput
     */
    public function setFilename(string $filename): ZipInput
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
     * @return ZipInput
     */
    public function setForceDownload(bool $forceDownload): ZipInput
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
     * @return ZipInput
     */
    public function setTimeOffset(?string $timeOffset): ZipInput
    {
        $this->timeOffset = $timeOffset;
        return $this;
    }
}