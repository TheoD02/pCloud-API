<?php

namespace App\PCloud\Schema\Input\Streaming\Text;

use App\PCloud\Schema\Core\InputSchemaTrait;

class StreamTextFileWithFilePathInput
{
    use InputSchemaTrait;

    private bool $forceDownload;

    public function __construct(
        private string $path,
        private string $fromEncoding = 'guess',
        private string $toEncoding = 'utf-8',
        bool           $forceDownload = false,
        private string $contentType = 'text/plain',
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
     * @return StreamTextFileWithFilePathInput
     */
    public function setPath(string $path): StreamTextFileWithFilePathInput
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromEncoding(): string
    {
        return $this->fromEncoding;
    }

    /**
     * @param string $fromEncoding
     * @return StreamTextFileWithFilePathInput
     */
    public function setFromEncoding(string $fromEncoding): StreamTextFileWithFilePathInput
    {
        $this->fromEncoding = $fromEncoding;
        return $this;
    }

    /**
     * @return string
     */
    public function getToEncoding(): string
    {
        return $this->toEncoding;
    }

    /**
     * @param string $toEncoding
     * @return StreamTextFileWithFilePathInput
     */
    public function setToEncoding(string $toEncoding): StreamTextFileWithFilePathInput
    {
        $this->toEncoding = $toEncoding;
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
     * @return StreamTextFileWithFilePathInput
     */
    public function setForceDownload(bool $forceDownload): StreamTextFileWithFilePathInput
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
     * @return StreamTextFileWithFilePathInput
     */
    public function setContentType(string $contentType): StreamTextFileWithFilePathInput
    {
        $this->contentType = $contentType;
        return $this;
    }
}