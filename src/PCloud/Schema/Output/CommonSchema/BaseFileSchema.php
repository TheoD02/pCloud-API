<?php

namespace App\PCloud\Schema\Output\CommonSchema;

use App\PCloud\Schema\Core\OutputSchemaTrait;
use Attribute;
use DateTime;

/**
 * This class can be used as abstract or as attribute to define array object type
 */
#[Attribute]
class BaseFileSchema extends CommonFileFolderSchema
{
    protected ?int $fileId = null;
    protected ?string $deletedFileId = null;
    protected ?int $category = null;
    protected ?int $size = null;
    protected ?int $hash = null;
    protected ?string $contentType = null;

    // IMAGE/VIDEO
    protected ?int $width = null;
    protected ?int $height = null;

    // VIDEO
    protected ?float $duration = null;
    protected ?float $fps = null;
    protected ?string $videoCodec = null;
    protected ?string $audioCodec = null;
    protected ?int $videoBitrate = null;
    protected ?int $audioBitrate = null;
    protected ?int $audioSampleRate = null;
    protected ?int $rotate = null;

    // AUDIO
    protected ?string $artist = null;
    protected ?string $album = null;
    protected ?string $title = null;
    protected ?string $genre = null;
    /**
     * @return int|null
     */
    public function getFileId(): ?int
    {
        return $this->fileId;
    }

    /**
     * @param int|null $fileId
     * @return BaseFileSchema
     */
    public function setFileId(?int $fileId): BaseFileSchema
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeletedFileId(): ?string
    {
        return $this->deletedFileId;
    }

    /**
     * @param string|null $deletedFileId
     * @return BaseFileSchema
     */
    public function setDeletedFileId(?string $deletedFileId): BaseFileSchema
    {
        $this->deletedFileId = $deletedFileId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCategory(): ?int
    {
        return $this->category;
    }

    /**
     * @param int|null $category
     * @return BaseFileSchema
     */
    public function setCategory(?int $category): BaseFileSchema
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int|null $size
     * @return BaseFileSchema
     */
    public function setSize(?int $size): BaseFileSchema
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHash(): ?int
    {
        return $this->hash;
    }

    /**
     * @param int|null $hash
     * @return BaseFileSchema
     */
    public function setHash(?int $hash): BaseFileSchema
    {
        $this->hash = $hash;
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
     * @return BaseFileSchema
     */
    public function setContentType(?string $contentType): BaseFileSchema
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int|null $width
     * @return BaseFileSchema
     */
    public function setWidth(?int $width): BaseFileSchema
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int|null $height
     * @return BaseFileSchema
     */
    public function setHeight(?int $height): BaseFileSchema
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * @param float|null $duration
     * @return BaseFileSchema
     */
    public function setDuration(?float $duration): BaseFileSchema
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getFps(): ?float
    {
        return $this->fps;
    }

    /**
     * @param float|null $fps
     * @return BaseFileSchema
     */
    public function setFps(?float $fps): BaseFileSchema
    {
        $this->fps = $fps;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVideoCodec(): ?string
    {
        return $this->videoCodec;
    }

    /**
     * @param string|null $videoCodec
     * @return BaseFileSchema
     */
    public function setVideoCodec(?string $videoCodec): BaseFileSchema
    {
        $this->videoCodec = $videoCodec;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAudioCodec(): ?string
    {
        return $this->audioCodec;
    }

    /**
     * @param string|null $audioCodec
     * @return BaseFileSchema
     */
    public function setAudioCodec(?string $audioCodec): BaseFileSchema
    {
        $this->audioCodec = $audioCodec;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVideoBitrate(): ?int
    {
        return $this->videoBitrate;
    }

    /**
     * @param int|null $videoBitrate
     * @return BaseFileSchema
     */
    public function setVideoBitrate(?int $videoBitrate): BaseFileSchema
    {
        $this->videoBitrate = $videoBitrate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAudioBitrate(): ?int
    {
        return $this->audioBitrate;
    }

    /**
     * @param int|null $audioBitrate
     * @return BaseFileSchema
     */
    public function setAudioBitrate(?int $audioBitrate): BaseFileSchema
    {
        $this->audioBitrate = $audioBitrate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAudioSampleRate(): ?int
    {
        return $this->audioSampleRate;
    }

    /**
     * @param int|null $audioSampleRate
     * @return BaseFileSchema
     */
    public function setAudioSampleRate(?int $audioSampleRate): BaseFileSchema
    {
        $this->audioSampleRate = $audioSampleRate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRotate(): ?int
    {
        return $this->rotate;
    }

    /**
     * @param int|null $rotate
     * @return BaseFileSchema
     */
    public function setRotate(?int $rotate): BaseFileSchema
    {
        $this->rotate = $rotate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getArtist(): ?string
    {
        return $this->artist;
    }

    /**
     * @param string|null $artist
     * @return BaseFileSchema
     */
    public function setArtist(?string $artist): BaseFileSchema
    {
        $this->artist = $artist;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAlbum(): ?string
    {
        return $this->album;
    }

    /**
     * @param string|null $album
     * @return BaseFileSchema
     */
    public function setAlbum(?string $album): BaseFileSchema
    {
        $this->album = $album;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return BaseFileSchema
     */
    public function setTitle(?string $title): BaseFileSchema
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGenre(): ?string
    {
        return $this->genre;
    }

    /**
     * @param string|null $genre
     * @return BaseFileSchema
     */
    public function setGenre(?string $genre): BaseFileSchema
    {
        $this->genre = $genre;
        return $this;
    }
}