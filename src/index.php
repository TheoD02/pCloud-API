<?php

namespace App;

use Doctrine\Common\Collections\ArrayCollection;
use PCloud\PCloud\Schema\Input\File\PCloudFile;
use PCloud\PCloud\Schema\Input\File\UploadFile\UploadFileWithPathInput;
use PCloud\PCloud\Schema\Input\Folder\ListFolder\ListFolderWithIdInput;
use PCloud\PCloud\Schema\Output\CommonSchema\BaseFileSchema;
use PCloud\PCloud\Schema\Output\CommonSchema\BaseFolderSchema;
use PCloud\Service\PCloudService;
use Symfony\Component\Dotenv\Dotenv;

require '../vendor/autoload.php';
$dotenv = new Dotenv();
$dotenv->load(dirname(__DIR__) . '/.env.local');

$p = new PCloudService($_ENV['PCLOUD_EMAIL'], $_ENV['PCLOUD_PASSWORD']);
