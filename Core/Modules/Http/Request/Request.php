<?php

namespace Core\Modules\Http\Request;

class Request implements RequestInterface
{

    public function __construct(
        private ?array $server,
        private ?array $get,
        private ?array $post,
        private ?array $cookie,
        private ?array $files
    ) {
    }

    public static function setGlobals(): RequestInterface
    {
        return new Request(
            $_SERVER ?? null,
            $_GET ?? null,
            $_POST ?? null,
            $_COOKIE ?? null,
            $_FILES ?? null
        );
    }

    public function server(): ?array
    {
        return $this->server;
    }

    public function get(): ?array
    {
        return $this->get;
    }

    public function post(): ?array
    {
        return $this->post;
    }

    public function cookie(): ?array
    {
        return $this->cookie;
    }

    public function files(): ?array
    {
        return $this->files;
    }

    public function input(string $key): ?array
    {
        return $this->post[$key] ?? $this->get[$key] ?? null;
    }

    public function method():string
    {
        return $this->server['REQUEST_METHOD'];
    }

    public function uri():string
    {
        return $this->server['REQUEST_URI'];
    }
}