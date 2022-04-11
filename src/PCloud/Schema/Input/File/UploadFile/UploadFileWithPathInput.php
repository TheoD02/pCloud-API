<?php

namespace App\PCloud\Schema\Input\File\UploadFile;

use App\PCloud\Adapters\UploadFileInterface;
use App\PCloud\Schema\Core\InputSchemaTrait;
use App\PCloud\Schema\Input\File\PCloudFile;

class UploadFileWithPathInput implements UploadFileInterface
{
    use InputSchemaTrait;

    public function __construct(
        private array   $files = [],
        protected ?string $path = null,
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
                'filename' => sprintf('%s/%s', $this->getPath(), $file->getFilename()),
                'path' => $this->getPath(),
            ];
        }
        return $files;
    }

    /**
     * @param PCloudFile[] $files
     * @return UploadFileWithPathInput
     */
    public function setFiles(array $files): UploadFileWithPathInput
    {
        $this->files = $files;
        return $this;
    }

    /**
     * @param PCloudFile $file
     * @return UploadFileWithPathInput
     */
    public function addFile(PCloudFile $file): UploadFileWithPathInput
    {
        $this->files[] = $file;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string|null $path
     * @return UploadFileWithPathInput
     */
    public function setPath(?string $path): UploadFileWithPathInput
    {
        $this->path = $path;
        return $this;
    }
}