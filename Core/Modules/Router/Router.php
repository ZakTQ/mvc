<?php

namespace Core\Modules\Router;

class Router implements RouterInterface
{
    private array $routes;
    private array $sortRoutesArr;

    public function __construct(string $routesFilePath)
    {
        $this->routes = require_once $routesFilePath;
    }

    public function match(string $method, string $uri)
    {
        $this->sortRoutes($this->routes);
        $route = $this->sortRoutesArr[$method][$uri];

        //mydd($this->sortRoutesArr);

        if (!$route) {
            echo '404';
            exit;
        }
        $route();
    }

    public function addRoute(Route $route): void
    {
        $this->sortRoutesArr[$route->method()][$route->uri()] = $route->action();
    }

    private function sortRoutes(array $arr): void
    {
        foreach ($arr as $route) {
            $this->addRoute($route);
        }
    }
}