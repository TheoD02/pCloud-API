<?php

namespace PCloud\PCloud\Adapters;

use PCloud\PCloud\Schema\Input\File\PCloudFile;

interface UploadFileInterface
{
    /** @return PCloudFile[] */
    public function getFiles(): array;
}