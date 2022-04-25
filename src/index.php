<?php

namespace App;

use GuzzleHttp\Client;
use pCloud\App;
use PCloud\Enum\PCloudFileOperation;
use PCloud\Enum\PCloudServer;
use PCloud\PCloud\Schema\Input\FileOps\FileOpenWithFileIdInput;
use PCloud\PCloud\Schema\Input\FileOps\FilePReadWithFileIdInput;
use pCloud\Request;
use PCloud\Service\PCloudService;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpClient\HttpClient;

require '../vendor/autoload.php';
$dotenv = new Dotenv();
$dotenv->load(dirname(__DIR__) . '/.env.local');

$p = new PCloudService($_ENV['PCLOUD_EMAIL'], $_ENV['PCLOUD_PASSWORD']);
dump($p->getUserInfo()->getAuth());
$fileOpen = $p->fileOperationOpen((new FileOpenWithFileIdInput(12426385087, PCloudFileOperation::WRITE)));
dump($p->getUserInfo()->getAuth(), $fileOpen);
$fileRead = $p->fileOperationRead((new FilePReadWithFileIdInput($fileOpen)));
dump($p->getUserInfo()->getAuth(), $fileRead);