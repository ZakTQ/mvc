<?php

namespace Core\Modules\Http\Request;

interface RequestInterface
{
    public static function setGlobals();

    public function server(): ?array;

    public function get(): ?array;

    public function post(): ?array;

    public function cookie(): ?array;

    public function files(): ?array;

    public function input(string $key): ?array;

    public function method():string;

    public function uri():string;
}