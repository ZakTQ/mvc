<?php

namespace Core\Container;

use Core\Modules\Config\Config;
use Core\Modules\Config\ConfigInterface;
use Core\Modules\Http\Redirect\Redirect;
use Core\Modules\Http\Redirect\RedirectInterface;
use Core\Modules\Http\Request\Request;
use Core\Modules\Http\Request\RequestInterface;
use Core\Modules\Router\Router;
use Core\Modules\Router\RouterInterface;
use Core\View\View;
use Core\View\ViewInterface;

class Container
{
    public readonly ConfigInterface $config;
    public readonly RequestInterface $request;
    public readonly RedirectInterface $redirect;
    public readonly ViewInterface $view;
    public readonly RouterInterface $router;

    public function initServices()
    {
        $this->config = new Config(
            APP_PATH . '/config/config.php'
        );
        $this->request = Request::setGlobals();
        $this->redirect = new Redirect();
        $this->view = new View(
            APP_PATH . '/views//'
        );
        $this->router = new Router(
            $this->config->getConfig('routes')
        );

    }
}