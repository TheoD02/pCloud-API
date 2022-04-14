<?php

namespace PCloud\Utils;

class ArrayUtils
{
    public static function uniqueArrayValue(array $array): array
    {
        return array_flip(array_flip($array));
    }
}