<?php

namespace PCloud\PCloud\Schema\Input\Archiving;

use PCloud\PCloud\Schema\Core\InputSchemaTrait;

class ExtractArchiveWithFileIdInput
{
    use InputSchemaTrait;

    public function __construct(
        private int $fileId,
        private int $toFolderId,
        private bool $noOutput = true,
        private string $overwrite = 'skip', // RENAME OR DEFAULT
        private ?string $password = null
    )
    {
    }

    /**
     * @return int
     */
    public function getFileId(): int
    {
        return $this->fileId;
    }

    /**
     * @param int $fileId
     * @return ExtractArchiveWithFileIdInput
     */
    public function setFileId(int $fileId): ExtractArchiveWithFileIdInput
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return int
     */
    public function getToFolderId(): int
    {
        return $this->toFolderId;
    }

    /**
     * @param int $toFolderId
     * @return ExtractArchiveWithFileIdInput
     */
    public function setToFolderId(int $toFolderId): ExtractArchiveWithFileIdInput
    {
        $this->toFolderId = $toFolderId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNoOutput(): bool
    {
        return $this->noOutput;
    }

    /**
     * @param bool $noOutput
     * @return ExtractArchiveWithFileIdInput
     */
    public function setNoOutput(bool $noOutput): ExtractArchiveWithFileIdInput
    {
        $this->noOutput = $noOutput;
        return $this;
    }

    /**
     * @return string
     */
    public function getOverwrite(): string
    {
        return $this->overwrite;
    }

    /**
     * @param string $overwrite
     * @return ExtractArchiveWithFileIdInput
     */
    public function setOverwrite(string $overwrite): ExtractArchiveWithFileIdInput
    {
        $this->overwrite = $overwrite;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     * @return ExtractArchiveWithFileIdInput
     */
    public function setPassword(?string $password): ExtractArchiveWithFileIdInput
    {
        $this->password = $password;
        return $this;
    }
}
