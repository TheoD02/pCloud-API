<?php

namespace PCloud\PCloud\Schema\Output\CommonSchema;

use Doctrine\Common\Collections\ArrayCollection;
use PCloud\PCloud\Schema\Core\OutputSchemaTrait;
use Attribute;
use DateTime;
use PCloud\PCloud\Schema\Output\Folder\ListFolderOutput;
use function App\getFilesRecursive;

/**
 * This class can be used as abstract or as attribute to define array object type
 */
#[Attribute]
class BaseFolderSchema extends CommonFileFolderSchema
{
    protected ?bool $canCreate = true;
    protected ?ArrayCollection $contents = null;

    /**
     * @return bool|null
     */
    public function getCanCreate(): ?bool
    {
        return $this->canCreate;
    }

    /**
     * @param bool|null $canCreate
     * @return self
     */
    public function setCanCreate(?bool $canCreate): self
    {
        $this->canCreate = $canCreate;
        return $this;
    }

    /**
     * @return ArrayCollection|BaseFolderSchema[]|BaseFileSchema[]|null
     */
    public function getContents(): ?ArrayCollection
    {
        return $this->contents;
    }

    /**
     * @param array|null $contents
     * @return self
     */
    #[BaseFolderSchema]
    public function setContents(?array $contents): self
    {
        $this->contents = new ArrayCollection($contents);
        return $this;
    }

    public function getAllFiles(?string $extensionFilter = null): ArrayCollection
    {
        $files = [];
        foreach ($this->getContents() as $folders) {
            $files = [...$files, ...$this->getFiles($folders)];
        }
        return new ArrayCollection($files);
    }

    private function getFiles(BaseFolderSchema|BaseFileSchema $data): array
    {
        $files = [];
        if ($data instanceof BaseFolderSchema) {
            foreach ($data->getContents() as $d) {
                if ($d->getIsFolder()) {
                    $files = [...$files, ...$this->getFiles($d)];
                } else {
                    $files[] = $d;
                }
            }
        } else if ($data instanceof BaseFileSchema) {
            $files[] = $data;
        }
        return $files;
    }
}