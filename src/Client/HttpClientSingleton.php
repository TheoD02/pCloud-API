<?php

namespace PCloud\Client;

use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Cookie\SessionCookieJar;
use GuzzleHttp\Handler\CurlMultiHandler;
use GuzzleHttp\HandlerStack;
use PCloud\Enum\PCloudServer;
use GuzzleHttp\Client;

class HttpClientSingleton
{
    private static ?Client $client = null;

    private static function createClient(PCloudServer $server): void
    {
        self::$client = new Client([
            'base_uri' => $server->value,
            'cookies' => new SessionCookieJar('key'),
            'handler' => self::getHandler(),
        ]);
    }

    public static function getClient(PCloudServer $server = PCloudServer::EU_API): ?Client
    {
        if (null === self::$client) {
            self::createClient($server);
        }
        return self::$client;
    }

    private static function getHandler(): HandlerStack
    {
        return HandlerStack::create(new CurlMultiHandler([
            'options' => [
                CURLMOPT_MAX_TOTAL_CONNECTIONS => 50,
                CURLMOPT_MAX_HOST_CONNECTIONS => 10,
            ]
        ]));
    }
}