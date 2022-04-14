<?php

namespace PCloud\Client;

use PCloud\Enum\PCloudServer;
use GuzzleHttp\Client;

class HttpClientSingleton
{
    private static ?Client $client = null;

    private static function createClient(PCloudServer $server): void
    {
        self::$client = new Client([
            'base_uri' => $server->value
        ]);
    }

    public static function getClient(PCloudServer $server = PCloudServer::EU_API): ?Client
    {
        if (null === self::$client) {
            self::createClient($server);
        }
        return self::$client;
    }
}