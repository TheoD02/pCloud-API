<?php

namespace App\PCloud\Schema\Core;

use ReflectionObject;

trait InputSchemaTrait
{
    public function toArray(): \Generator
    {
        $reflectionClass = new ReflectionObject($this);
        foreach ($reflectionClass->getMethods() as $method) {
            if (str_starts_with($method->getName(), 'get')) {
                if (null !== $this->{$method->getName()}()) {
                    yield strtolower(substr($method->getName(), 3)) => $this->{$method->getName()}();
                }
            }
        }
    }
}