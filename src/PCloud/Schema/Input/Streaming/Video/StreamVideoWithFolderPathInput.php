<?php

namespace PCloud\PCloud\Schema\Input\Streaming\Video;

use PCloud\PCloud\Schema\Core\InputSchemaTrait;

class StreamVideoWithFolderPathInput
{
    use InputSchemaTrait;

    private bool $forceDownload;

    public function __construct(
        private string  $path,
        bool            $forceDownload = false,
        private ?string $contentType = null,
        private ?int    $maxSpeed = null,
        private bool    $skipFilename = false,
        private int     $aBitrate = 320,
        private int     $vBitrate = 3000,
        private string  $resolution = '1280x960',
        private bool    $fixedBitrate = true,
    )
    {
        $this->forceDownload = $forceDownload;
        if ($forceDownload) {
            $this->contentType = 'application/octet-stream';
        } else if ($this->contentType === 'application/octet-stream') {
            $this->contentType = null;
        }
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
     * @return StreamVideoWithFolderPathInput
     */
    public function setPath(string $path): StreamVideoWithFolderPathInput
    {
        $this->path = $path;
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
     * @return StreamVideoWithFolderPathInput
     */
    public function setForceDownload(bool $forceDownload): StreamVideoWithFolderPathInput
    {
        $this->forceDownload = $forceDownload;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    /**
     * @param string|null $contentType
     * @return StreamVideoWithFolderPathInput
     */
    public function setContentType(?string $contentType): StreamVideoWithFolderPathInput
    {
        $this->contentType = $contentType;
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
     * @return StreamVideoWithFolderPathInput
     */
    public function setMaxSpeed(?int $maxSpeed): StreamVideoWithFolderPathInput
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
     * @return StreamVideoWithFolderPathInput
     */
    public function setSkipFilename(bool $skipFilename): StreamVideoWithFolderPathInput
    {
        $this->skipFilename = $skipFilename;
        return $this;
    }

    /**
     * @return int
     */
    public function getABitrate(): int
    {
        return $this->aBitrate;
    }

    /**
     * @param int $aBitrate
     * @return StreamVideoWithFolderPathInput
     */
    public function setABitrate(int $aBitrate): StreamVideoWithFolderPathInput
    {
        $this->aBitrate = $aBitrate;
        return $this;
    }

    /**
     * @return int
     */
    public function getVBitrate(): int
    {
        return $this->vBitrate;
    }

    /**
     * @param int $vBitrate
     * @return StreamVideoWithFolderPathInput
     */
    public function setVBitrate(int $vBitrate): StreamVideoWithFolderPathInput
    {
        $this->vBitrate = $vBitrate;
        return $this;
    }

    /**
     * @return string
     */
    public function getResolution(): string
    {
        return $this->resolution;
    }

    /**
     * @param string $resolution
     * @return StreamVideoWithFolderPathInput
     */
    public function setResolution(string $resolution): StreamVideoWithFolderPathInput
    {
        $this->resolution = $resolution;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFixedBitrate(): bool
    {
        return $this->fixedBitrate;
    }

    /**
     * @param bool $fixedBitrate
     * @return StreamVideoWithFolderPathInput
     */
    public function setFixedBitrate(bool $fixedBitrate): StreamVideoWithFolderPathInput
    {
        $this->fixedBitrate = $fixedBitrate;
        return $this;
    }
}