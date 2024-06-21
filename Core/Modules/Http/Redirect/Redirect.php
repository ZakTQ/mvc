<?php

namespace Core\Modules\Http\Redirect;

class Redirect implements RedirectInterface
{
    public function to(string $path): void
    {
        header("Location: $path");
        exit;
    }

    public function with(string $path, array $data): void
    {
        header("Location: $path");
        extract($data);
        exit;
    }
}