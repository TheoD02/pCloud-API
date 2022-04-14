<?php

namespace PCloud\PCloud\Schema\Input\Streaming\Audio;

use PCloud\PCloud\Adapters\StreamAudioInterface;
use PCloud\PCloud\Schema\Core\InputSchemaTrait;

class StreamAudioWithFilePathInput implements StreamAudioInterface
{
    use InputSchemaTrait;

    private $forceDownload;

    public function __construct(
        private int     $fileId,
        private int     $bitrate = 320,
        private ?string $contentType = null,
        ?bool           $forceDownload = null,
    )
    {
        $this->forceDownload = $forceDownload;
        if ($this->forceDownload) {
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
     * @return StreamFileLinkWithFilePathInput
     */
    public function setPath(string $path): StreamFileLinkWithFilePathInput
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
     * @return StreamFileLinkWithFilePathInput
     */
    public function setForceDownload(bool $forceDownload): StreamFileLinkWithFilePathInput
    {
        $this->forceDownload = $forceDownload;
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
     * @return StreamFileLinkWithFilePathInput
     */
    public function setContentType(string $contentType): StreamFileLinkWithFilePathInput
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getBitrate(): int
    {
        return $this->bitrate;
    }

    /**
     * @param int $bitrate
     * @return StreamFileLinkWithFilePathInput
     */
    public function setBitrate(int $bitrate): StreamFileLinkWithFilePathInput
    {
        $this->bitrate = $bitrate;
        return $this;
    }
}