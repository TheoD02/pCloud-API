<?php

namespace App\PCloud\Schema\Input\Streaming\File;

use App\PCloud\Schema\Core\InputSchemaTrait;

class StreamFileWithFileIdInput
{
    use InputSchemaTrait;

    public function __construct(
        private int    $folderId,
        private string $contentType,
        private bool   $forceDownload = false,
        private ?int   $maxSpeed = null,
        private bool   $skipFilename = false,
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
     * @return StreamFileWithFileIdInput
     */
    public function setFolderId(int $folderId): StreamFileWithFileIdInput
    {
        $this->folderId = $folderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return StreamFileWithFileIdInput
     */
    public function setContentType(string $contentType): StreamFileWithFileIdInput
    {
        $this->contentType = $contentType;
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
     * @return StreamFileWithFileIdInput
     */
    public function setForceDownload(bool $forceDownload): StreamFileWithFileIdInput
    {
        $this->forceDownload = $forceDownload;
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
     * @return StreamFileWithFileIdInput
     */
    public function setMaxSpeed(?int $maxSpeed): StreamFileWithFileIdInput
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSkipFilename(): bool
    {
        return $this->skipFilename;
    }

    /**
     * @param bool $skipFilename
     * @return StreamFileWithFileIdInput
     */
    public function setSkipFilename(bool $skipFilename): StreamFileWithFileIdInput
    {
        $this->skipFilename = $skipFilename;
        return $this;
    }
}