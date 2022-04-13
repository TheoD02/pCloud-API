<?php

namespace App;

use App\PCloud\Schema\Input\File\PCloudFile;
use App\PCloud\Schema\Input\File\UploadFile\UploadFileWithFolderIdInput;
use App\PCloud\Schema\Input\File\UploadFile\UploadFileWithPathInput;
use App\Service\PCloudService;
use Symfony\Component\Dotenv\Dotenv;

require '../vendor/autoload.php';
$dotenv = new Dotenv();
$dotenv->load(dirname(__DIR__) . '/.env.local');

$p = new PCloudService($_ENV['PCLOUD_EMAIL'], $_ENV['PCLOUD_PASSWORD']);
/*$randomFile = [9598233620, 9601296057, 9598221592, 9598232170];
$randomId = $randomFile[random_int(0, count($randomFile) - 1)];
echo $p->streamAudioLink(new StreamAudioWithFileIdInput($randomId));*/

$localPath = 'C:\Users\Administrator\Music\TRIE 2020 (SEPTEMBRE)\AFRO STYLE';
$files = array_slice(array_map(fn($v) => sprintf('%s\%s', $localPath, $v), array_filter(scandir($localPath), fn($v) => $v !== '.' && $v !== '..')), 0, 2);
$uploadInput = new UploadFileWithPathInput('/test');
foreach ($files as $fPath) {
    $uploadInput->addFile(
        new PCloudFile(
            $fPath
        )
    );
}
$p->uploadFile($uploadInput);