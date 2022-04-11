<?php

namespace App;

use App\PCloud\Schema\Input\File\DeleteFile\DeleteFileWithFileIdInput;
use App\PCloud\Schema\Input\File\DeleteFile\DeleteFileWithFilePathInput;
use App\PCloud\Schema\Input\File\PCloudFile;
use App\PCloud\Schema\Input\File\UploadFile\UploadFileWithFolderIdInput;
use App\PCloud\Schema\Input\Folder\ListFolder\ListFolderWithIdInput;
use App\Service\PCloudService;
use Symfony\Component\Dotenv\Dotenv;

require './vendor/autoload.php';
$dotenv = new Dotenv();
$dotenv->load(dirname(__DIR__) . '/.env.local');

$p = new PCloudService($_ENV['PCLOUD_EMAIL'], $_ENV['PCLOUD_PASSWORD']);
$res = $p->listFolder(new ListFolderWithIdInput(0), noFiles: false)->getContents();
$last = end($res);
$p->deleteFile(new DeleteFileWithFileIdInput($last->getFileId()));
die;