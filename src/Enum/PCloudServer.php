<?php

namespace App\Enum;

enum PCloudServer: string
{
    case EU_API = 'http://eapi.pcloud.com/';
    case US_API = 'http://api.pcloud.com/';
}