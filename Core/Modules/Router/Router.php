<?php

namespace Core\Modules\Router;
use Core\Controller\AbstractController;

class Router implements RouterInterface
{
    private array $routes;
    private array $sortRoutesArr;

    public function __construct(string $routesFilePath)
    {
        $this->routes = require_once $routesFilePath;
        $this->sortRoutes($this->routes);
    }

    public function match(string $method, string $uri)
    {
        $route = $this->sortRoutesArr[$method][$uri];

        //mydd($this->sortRoutesArr);
        //mydd($route);

        if (!$route) {
            echo '404';
            exit;
        }

        [$controller, $action] = $route->action();

        /** @var AbstractController $controller */

        $controller = new $controller();
        call_user_func([$controller, $action]);
        exit;
    }

    private function findRoute()
    {
        // array_search()
    }

    private function runRoute()
    {

    }

    private function addRoute(Route $route): void
    {
        $this->sortRoutesArr[$route->method()][$route->uri()] = $route;
    }

    private function sortRoutes(array $arr): void
    {
        foreach ($arr as $route) {
            $this->addRoute($route);
        }
    }
}