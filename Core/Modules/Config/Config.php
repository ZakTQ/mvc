<?php

namespace Core\Modules\Config;

class Config implements ConfigInterface
{
    private array $configFile;

    public function __construct(string $path)
    {
        $this->configFile = require_once $path;
    }

    public function getConfig(string $key): string
    {
        return $this->configFile[$key];
    }
}