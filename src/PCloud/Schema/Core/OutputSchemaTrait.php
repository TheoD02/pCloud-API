<?php

namespace PCloud\PCloud\Schema\Core;

use Doctrine\Common\Collections\ArrayCollection;
use PCloud\PCloud\Schema\Output\CommonSchema\BaseFileSchema;
use PCloud\PCloud\Schema\Output\CommonSchema\BaseFolderSchema;
use DateTime;
use ReflectionObject;

trait OutputSchemaTrait
{
    public function setDataFromResponse(array $responseData): self
    {
        $reflectionClass = new ReflectionObject($this);
        foreach ($reflectionClass->getMethods() as $method) {
            if (str_starts_with($method->getName(), 'set')) {
                $parameter = current($method->getParameters());
                $data = $responseData['metadata'][strtolower($parameter->getName())] ?? $responseData[strtolower($parameter->getName())] ?? null;
                if (null !== $data) {
                    if (!in_array($parameter->getType()?->getName(), ['bool', 'string', 'int', 'DateTime', 'array', 'Doctrine\Common\Collections\ArrayCollection'])) {
                        var_dump($parameter->getType()->getName());
                        die; // TODO : Remove debug
                    }
                    $data = match ($parameter->getType()?->getName()) {
                        'bool' => (bool)$data,
                        'string' => (string)$data,
                        'int' => (int)$data,
                        'DateTime' => new DateTime($data),
                        default => $data,
                    };
                    if ('array' === $parameter->getType()?->getName()) {
                        if ($method->getAttributes()) {
                            foreach ($data as $k => $d) {
                                $dataObj = $d['isfolder'] ? new BaseFolderSchema() : new BaseFileSchema();
                                $data[$k] = $dataObj->setDataFromResponse($d);
                            }
                        }
                    }
                    $this->{$method->getName()}($data);
                }
            }
        }
        return $this;
    }
}