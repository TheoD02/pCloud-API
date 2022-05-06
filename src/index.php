<?php

namespace App;

use PCloud\PCloud\Schema\Input\Archiving\ExtractArchiveWithFileIdInput;
use PCloud\Service\PCloudService;
use Symfony\Component\Dotenv\Dotenv;

require '../vendor/autoload.php';
$dotenv = new Dotenv();
$dotenv->load(dirname(__DIR__) . '/.env.local');

$p = new PCloudService($_ENV['PCLOUD_EMAIL'], $_ENV['PCLOUD_PASSWORD']);
$output = $p->extractZip(
    new ExtractArchiveWithFileIdInput(13039976464, 2998787984)
);
dd($output);
/*dump($p->getUserInfo()->getAuth());
$fileOpen = $p->fileOperationOpen((new FileOpenWithFileIdInput(12426385087, PCloudFileOperation::WRITE)));
dump($p->getUserInfo()->getAuth(), $fileOpen);
$fileRead = $p->fileOperationRead((new FilePReadWithFileIdInput($fileOpen)));
dump($p->getUserInfo()->getAuth(), $fileRead);*/
