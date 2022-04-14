<?php

namespace App;

use PCloud\PCloud\Schema\Input\File\PCloudFile;
use PCloud\PCloud\Schema\Input\File\UploadFile\UploadFileWithPathInput;
use PCloud\Service\PCloudService;
use Symfony\Component\Dotenv\Dotenv;

require '../vendor/autoload.php';
$dotenv = new Dotenv();
$dotenv->load(dirname(__DIR__) . '/.env.local');

$p = new PCloudService($_ENV['PCLOUD_EMAIL'], $_ENV['PCLOUD_PASSWORD']);
/*$randomFile = [9598233620, 9601296057, 9598221592, 9598232170];
$randomId = $randomFile[random_int(0, count($randomFile) - 1)];
echo $p->streamAudioLink(new StreamAudioWithFileIdInput($randomId));*/

$localPath = 'C:\Users\Administrator\Music\TRIE 2020 (SEPTEMBRE)\BANGERZ RAP';
$files = array_map(fn($v) => sprintf('%s\%s', $localPath, $v), array_filter(scandir($localPath), fn($v) => $v !== '.' && $v !== '..'));
$uploadInput = new UploadFileWithPathInput('/test');
foreach ($files as $fPath) {
    $uploadInput->addFile(
        new PCloudFile(
            fopen($fPath, 'rb+')
        )
    );
}
$p->uploadFile($uploadInput);