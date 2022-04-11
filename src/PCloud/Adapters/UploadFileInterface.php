<?php

namespace App\PCloud\Adapters;

use App\PCloud\Schema\Input\File\PCloudFile;

interface UploadFileInterface
{
    /** @return PCloudFile[] */
    public function getFiles(): array;
}