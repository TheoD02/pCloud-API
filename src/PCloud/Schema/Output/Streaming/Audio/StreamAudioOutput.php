<?php

namespace App\PCloud\Schema\Output\Streaming\Audio;

use App\PCloud\Schema\Core\OutputSchemaTrait;

class StreamAudioOutput
{
    use OutputSchemaTrait;

    private ?int $result = null;
    private ?\DateTime $expires = null;
    private ?string $path = null;
    private ?array $hosts = null;

    /**
     * @return int|null
     */
    public function getResult(): ?int
    {
        return $this->result;
    }

    /**
     * @param int|null $result
     * @return StreamAudioOutput
     */
    public function setResult(?int $result): StreamAudioOutput
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getExpires(): ?\DateTime
    {
        return $this->expires;
    }

    /**
     * @param \DateTime|null $expires
     * @return StreamAudioOutput
     */
    public function setExpires(?\DateTime $expires): StreamAudioOutput
    {
        $this->expires = $expires;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string|null $path
     * @return StreamAudioOutput
     */
    public function setPath(?string $path): StreamAudioOutput
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getHosts(): ?array
    {
        return $this->hosts;
    }

    /**
     * @param array|null $hosts
     * @return StreamAudioOutput
     */
    public function setHosts(?array $hosts): StreamAudioOutput
    {
        $this->hosts = $hosts;
        return $this;
    }

    public function getBestUrl(): string
    {
        return sprintf('https://%s%s', current($this->getHosts()), $this->getPath());
    }
}