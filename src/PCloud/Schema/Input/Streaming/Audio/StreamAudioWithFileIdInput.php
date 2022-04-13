<?php

namespace App\PCloud\Schema\Input\Streaming\Audio;

use App\PCloud\Schema\Core\InputSchemaTrait;

class StreamAudioWithFileIdInput
{
    use InputSchemaTrait;

    public function __construct(
        private int    $fileId,
        private bool   $forceDownload = false,
        private string $contentType = 'audio/mpeg',
        private int    $bitrate = 320,
    )
    {
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
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return StreamFileLinkWithFileIdInput
     */
    public function setContentType(string $contentType): StreamFileLinkWithFileIdInput
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