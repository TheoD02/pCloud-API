<?php

namespace App\PCloud\Schema\Input\Streaming\Audio;

use App\PCloud\Adapters\StreamAudioInterface;
use App\PCloud\Schema\Core\InputSchemaTrait;

class StreamAudioWithFileIdInput implements StreamAudioInterface
{
    use InputSchemaTrait;

    private bool $forceDownload;

    public function __construct(
        private int     $fileId,
        private int     $bitrate = 320,
        private ?string $contentType = null,
        bool            $forceDownload = false,
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
     * @return int
     */
    public function getFileId(): int
    {
        return $this->fileId;
    }

    /**
     * @param int $fileId
     * @return StreamFileLinkWithFileIdInput
     */
    public function setFileId(int $fileId): StreamFileLinkWithFileIdInput
    {
        $this->fileId = $fileId;
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
     * @return StreamFileLinkWithFileIdInput
     */
    public function setForceDownload(bool $forceDownload): StreamFileLinkWithFileIdInput
    {
        $this->forceDownload = $forceDownload;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return StreamFileLinkWithFileIdInput
     */
    public function setContentType(?string $contentType): StreamFileLinkWithFileIdInput
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
     * @return StreamFileLinkWithFileIdInput
     */
    public function setBitrate(int $bitrate): StreamFileLinkWithFileIdInput
    {
        $this->bitrate = $bitrate;
        return $this;
    }
}