<?php

namespace Core\Modules\Router;

class Route
{

    public function __construct(
        private string $method,
        private string $uri,
        private mixed $action
    ) {
    }

    public static function get(string $uri, mixed $action): static
    {
        return new static('GET', $uri, $action);
    }

    public function method(): string
    {
        return $this->method;
    }

    public function uri(): string
    {
        return $this->uri;
    }

    public function action(): mixed
    {
        return $this->action;
    }
}