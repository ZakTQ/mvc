<?php

namespace Core\Modules\Config;

interface ConfigInterface
{
    public function getConfig(string $key): string;
}