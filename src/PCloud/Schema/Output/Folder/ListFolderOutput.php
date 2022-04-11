<?php

namespace App\PCloud\Schema\Output\Folder;

use App\PCloud\Schema\Core\OutputSchemaTrait;
use App\PCloud\Schema\Output\CommonSchema\BaseFolderSchema;

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