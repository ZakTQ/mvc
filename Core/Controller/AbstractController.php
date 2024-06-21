<?php

namespace Core\Controller;

use Core\Midules\Session\SessionInterface;
use Core\Modules\Auth\AuthInterface;
use Core\Modules\Config\ConfigInterface;
use Core\Modules\DB\DatabaseInterface;
use Core\Modules\Http\Redirect\RedirectInterface;
use Core\Modules\Http\Request\RequestInterface;
use Core\Modules\Validator\ValidatorInterface;
use Core\View\ViewInterface;

abstract class AbstractController implements ControllerInterface
{
    private ViewInterface $view;
    private RequestInterface $request;
    private RedirectInterface $redirect;
    private SessionInterface $session;
    private ValidatorInterface $validator;
    private ConfigInterface $config;
    private AuthInterface $auth;
    private DatabaseInterface $db;


    public function setView(ViewInterface $view): void
    {
        $this->view = $view;
    }

    public function setRequest(RequestInterface $request): void
    {
        $this->request = $request;
    }

    public function setRedirect(RedirectInterface $redirect): void
    {
        $this->redirect = $redirect;
    }

    public function setSession(SessionInterface $session): void
    {
        $this->session = $session;
    }

    public function setValidator(ValidatorInterface $validator): void
    {
        $this->validator = $validator;
    }

    public function setConfig(ConfigInterface $config): void
    {
        $this->config = $config;
    }

    public function setAuth(AuthInterface $auth): void
    {
        $this->auth = $auth;
    }

    public function setDb(DatabaseInterface $db):void
    {
        $this->db = $db;
    }
}