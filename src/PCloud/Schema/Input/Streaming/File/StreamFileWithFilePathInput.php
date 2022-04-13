<?php

namespace App\PCloud\Schema\Input\Streaming\File;

use App\PCloud\Schema\Core\InputSchemaTrait;

class StreamFileWithFilePathInput
{
    use InputSchemaTrait;

    public function __construct(
        private string $path,
        private string $contentType,
        private bool   $forceDownload = false,
        private ?int   $maxSpeed = null,
        private bool   $skipFilename = false,
    )
    {
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
     * @return StreamFileWithFilePathInput
     */
    public function setPath(string $path): StreamFileWithFilePathInput
    {
        $this->path = $path;
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
     * @return StreamFileWithFilePathInput
     */
    public function setContentType(string $contentType): StreamFileWithFilePathInput
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
     * @return StreamFileWithFilePathInput
     */
    public function setForceDownload(bool $forceDownload): StreamFileWithFilePathInput
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
     * @return StreamFileWithFilePathInput
     */
    public function setMaxSpeed(?int $maxSpeed): StreamFileWithFilePathInput
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
     * @return StreamFileWithFilePathInput
     */
    public function setSkipFilename(bool $skipFilename): StreamFileWithFilePathInput
    {
        $this->skipFilename = $skipFilename;
        return $this;
    }
}