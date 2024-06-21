<?php

namespace Core\Modules\Router;

interface RouterInterface
{
    public function match(string $method, string $uri);

    //public function addRoute(string $method, string $uri, string $action);
}