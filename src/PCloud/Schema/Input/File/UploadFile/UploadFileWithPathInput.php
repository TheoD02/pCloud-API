<?php

namespace App\PCloud\Schema\Input\File\UploadFile;

use App\PCloud\Adapters\UploadFileInterface;
use App\PCloud\Schema\Core\InputSchemaTrait;
use App\PCloud\Schema\Input\File\PCloudFile;

class UploadFileWithPathInput extends BaseUploadFileInput implements UploadFileInterface
{
    public function __construct(
        protected string $path = '/',
        array            $files = []
    )
    {
        parent::__construct($files);
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
     * @return UploadFileWithPathInput
     */
    public function setPath(string $path): UploadFileWithPathInput
    {
        $this->path = $path;
        return $this;
    }
}