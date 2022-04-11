<?php

namespace App;

use App\PCloud\Schema\Input\File\DeleteFile\DeleteFileWithFileIdInput;
use App\PCloud\Schema\Input\File\PCloudFile;
use App\PCloud\Schema\Input\File\UploadFile\UploadFileWithFolderIdInput;
use App\Service\PCloudService;

require './vendor/autoload.php';

$p = new PCloudService($_ENV['PCLOUD_EMAIL'], $_ENV['PCLOUD_PASSWORD']);
$upload = new UploadFileWithFolderIdInput(
    [
        new PCloudFile('C:\Users\Administrator\Music\TRIE 2020 (SEPTEMBRE)\BASS MUSIC\04 - Eurythmics - Sweat Dreams (Robin Felix Bootleg) (Chocolate Puma & Firebeatz) - 5A - 126.mp3', 'tie la fafa.mp3')
    ]
);
$res = $p->uploadFile($upload);
$p->uploadFile(new UploadFileWithFolderIdInput());
die;