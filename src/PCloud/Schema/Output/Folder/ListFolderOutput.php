<?php

namespace PCloud\PCloud\Schema\Output\Folder;

use PCloud\PCloud\Schema\Core\OutputSchemaTrait;
use PCloud\PCloud\Schema\Output\CommonSchema\BaseFolderSchema;

class ListFolderOutput extends BaseFolderSchema
{
    use OutputSchemaTrait;

    protected ?array $contents = null;

    /**
     * @return array|null
     */
    public function getContents(): ?array
    {
        return $this->contents;
    }

    /**
     * @param array|null $contents
     * @return ListFolderOutput
     */
    #[BaseFolderSchema]
    public function setContents(?array $contents): ListFolderOutput
    {
        $this->contents = $contents;
        return $this;
    }
}