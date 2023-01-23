<?php

namespace Kodlazim\Core\Helpers;

use JetBrains\PhpStorm\NoReturn;

class Redirect
{
    /**
     * @param string $toUrl
     * @param int $status
     * @return void
     */
    public static function to(string $toUrl, int $status = 301): void
    {
        header('Location:' . getenv('BASE_PATH') . $toUrl, true, $status);
        exit();
    }
}