<?php

namespace Core\Modules\Http\Redirect;

interface RedirectInterface
{
    public function to(string $path): void;

    public function with(string $path,array $data):void;
}