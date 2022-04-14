<?php

namespace PCloud\PCloud\Schema\Output\CommonSchema;

use PCloud\PCloud\Schema\Core\OutputSchemaTrait;
use Attribute;
use DateTime;

/**
 * This class can be used as abstract or as attribute to define array object type
 */
#[Attribute]
class BaseFolderSchema extends CommonFileFolderSchema
{
    protected ?bool $canCreate = true;

    /**
     * @return bool|null
     */
    public function getCanCreate(): ?bool
    {
        return $this->canCreate;
    }

    /**
     * @param bool|null $canCreate
     * @return BaseFolderSchema
     */
    public function setCanCreate(?bool $canCreate): BaseFolderSchema
    {
        $this->canCreate = $canCreate;
        return $this;
    }
}