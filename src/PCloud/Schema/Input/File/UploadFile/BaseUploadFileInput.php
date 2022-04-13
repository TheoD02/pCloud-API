<?php

namespace App\PCloud\Schema\Input\File\UploadFile;

use App\PCloud\Schema\Core\InputSchemaTrait;
use App\PCloud\Schema\Input\File\PCloudFile;

class BaseUploadFileInput
{
    use InputSchemaTrait;

    public function __construct(
        protected array $files = []
    )
    {
    }

    /**
     * @return PCloudFile[]
     */
    public function getFiles(): array
    {
        $files = [];
        foreach ($this->files as $k => $file) {
            $files[$k] = [
                'name' => "file-$k",
                'contents' => is_resource($file->getContents()) ? $file->getContents() : fopen($file->getContents(), 'rb+'),
            ];
            if ($file->getFilename()) {
                $files[$k]['filename'] = sprintf('%s/%s', $this->getPath(), $file->getFilename());
            }
        }
        return $files;
    }

    /**
     * @param PCloudFile[] $files
     * @return self
     */
    public function setFiles(array $files): self
    {
        $this->files = $files;
        return $this;
    }

    /**
     * @param PCloudFile $file
     * @return self
     */
    public function addFile(PCloudFile $file): self
    {
        $this->files[] = $file;
        return $this;
    }
}