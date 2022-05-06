<?php

namespace PCloud\PCloud\Schema\Output\Archiving;

use PCloud\PCloud\Schema\Core\OutputSchemaTrait;

class ExtractArchiveOutput
{
    use OutputSchemaTrait;

    protected string $progressHash;
    protected string $ip;
    protected string $hostname;
    protected string $ipv6;
    protected int $result;
    protected int $lines;
    protected string $ipbin;
    protected bool $finished;
    protected array $output = [];

    /**
     * @return string
     */
    public function getProgressHash(): string
    {
        return $this->progressHash;
    }

    /**
     * @param string $progressHash
     * @return ExtractArchiveOutput
     */
    public function setProgressHash(string $progressHash): ExtractArchiveOutput
    {
        $this->progressHash = $progressHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return ExtractArchiveOutput
     */
    public function setIp(string $ip): ExtractArchiveOutput
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }

    /**
     * @param string $hostname
     * @return ExtractArchiveOutput
     */
    public function setHostname(string $hostname): ExtractArchiveOutput
    {
        $this->hostname = $hostname;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpv6(): string
    {
        return $this->ipv6;
    }

    /**
     * @param string $ipv6
     * @return ExtractArchiveOutput
     */
    public function setIpv6(string $ipv6): ExtractArchiveOutput
    {
        $this->ipv6 = $ipv6;
        return $this;
    }

    /**
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }

    /**
     * @param int $result
     * @return ExtractArchiveOutput
     */
    public function setResult(int $result): ExtractArchiveOutput
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return int
     */
    public function getLines(): int
    {
        return $this->lines;
    }

    /**
     * @param int $lines
     * @return ExtractArchiveOutput
     */
    public function setLines(int $lines): ExtractArchiveOutput
    {
        $this->lines = $lines;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpbin(): string
    {
        return $this->ipbin;
    }

    /**
     * @param string $ipbin
     * @return ExtractArchiveOutput
     */
    public function setIpbin(string $ipbin): ExtractArchiveOutput
    {
        $this->ipbin = $ipbin;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFinished(): bool
    {
        return $this->finished;
    }

    /**
     * @param bool $finished
     * @return ExtractArchiveOutput
     */
    public function setFinished(bool $finished): ExtractArchiveOutput
    {
        $this->finished = $finished;
        return $this;
    }

    /**
     * @return array
     */
    public function getOutput(): array
    {
        return $this->output;
    }

    /**
     * @param array $output
     * @return ExtractArchiveOutput
     */
    public function setOutput(array $output): ExtractArchiveOutput
    {
        $this->output = $output;
        return $this;
    }
}
