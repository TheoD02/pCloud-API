<?php

namespace PCloud\PCloud\Schema\Core;

use ReflectionObject;

trait InputSchemaTrait
{
    public function toArray(): array
    {
        $options = [];
        $reflectionClass = new ReflectionObject($this);
        foreach ($reflectionClass->getMethods() as $method) {
            if (str_starts_with($method->getName(), 'get')) {
                if (null !== $this->{$method->getName()}()) {
                    $options[strtolower(substr($method->getName(), 3))] = $this->{$method->getName()}();
                }
            }
        }
        return $options;
    }
}