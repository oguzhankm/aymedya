<?php

namespace Kodlazim\Core;

class Response
{
    public static function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}