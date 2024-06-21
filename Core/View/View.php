<?php

namespace Core\View;

class View implements ViewInterface
{
    private string $viewFolder;

    public function __construct(string $viewFolder)
    {
        $this->viewFolder = $viewFolder;
    }

    public function render(string $page): void
    {
        require_once $this->viewFolder . "/$page.php";
    }
}