<?php

namespace Core;

use Core\Container\Container;

class App
{
    private $container;

    public function __construct()
    {
        $this->container = new Container();
        $this->container->initServices();
    }

    public function run()
    {
        $this->container->view->render('main');
        die;
        
        $this->container->router->match(
            $this->container->request->method(),
            $this->container->request->uri()
        );
    }
}