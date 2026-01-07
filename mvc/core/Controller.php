<?php

namespace Core;

use App\Classes\Uri;

class Controller
{
    private string $uri;

    public function __construct()
    {
        $this->uri = Uri::getUri();
    }
}
