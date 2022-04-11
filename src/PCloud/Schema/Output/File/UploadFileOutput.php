<?php

namespace App\PCloud\Schema\Output\File;

use App\PCloud\Schema\Core\OutputSchemaTrait;
use App\PCloud\Schema\Output\CommonSchema\BaseFileSchema;

class UploadFileOutput
{
    use OutputSchemaTrait;

    protected array $files = [];
    protected array $fileIds = [];
    protected array $checksums = [];

    /**
     * @return array
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @param array $metadata
     * @return UploadFileOutput
     */
    #[BaseFileSchema]
    public function setFiles(array $metadata): UploadFileOutput
    {
        $this->files = $metadata;
        return $this;
    }

    /**
     * @return array
     */
    public function getFileIds(): array
    {
        return $this->fileIds;
    }

    /**
     * @param array $fileIds
     * @return UploadFileOutput
     */
    public function setFileIds(array $fileIds): UploadFileOutput
    {
        $this->fileIds = $fileIds;
        return $this;
    }

    /**
     * @return array
     */
    public function getChecksums(): array
    {
        return $this->checksums;
    }

    /**
     * @param array $checksums
     * @return UploadFileOutput
     */
    public function setChecksums(array $checksums): UploadFileOutput
    {
        $this->checksums = $checksums;
        return $this;
    }

}