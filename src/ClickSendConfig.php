<?php

namespace NotificationChannels\ClickSend;

class ClickSendConfig
{
    private array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function getUsername(): ?string
    {
        return $this->config['username'] ?? null;
    }

    public function getPassword(): ?string
    {
        return $this->config['password'] ?? null;
    }

    public function configurationValid(): bool
    {
        return !(is_null($this->getUsername()) || is_null($this->getPassword()));
    }
}