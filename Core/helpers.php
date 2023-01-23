<?php

/**
 * @param string $name
 * @param array $params
 * @return string
 */
function route(string $name, array $params = []): string
{
    return \Kodlazim\Core\Route::url($name, $params);
}


/**
 * @param string $name
 * @param array $data
 * @return string
 */
function view(string $name, array $data = []): string
{
    return \Kodlazim\Core\View::show($name, $data);
}

function view_admin(string $name, array $data = []): string
{
    return \Kodlazim\Core\View::showAdmin($name, $data);
}

function url(string $name, array $params = []): string
{
    return \Kodlazim\Core\Route::url($name, $params);
}

function active(string $name):bool
{
    return \Kodlazim\Core\Route::activeRoute($name);
}

function assets(string $filePath): string
{
    return getenv('BASE_PATH') . '/public/assets/'  . ltrim($filePath, '/');
}

function assets_admin(string $filePath): string
{
    return getenv('BASE_PATH') . '/public/publicAdmin/assets/'  . ltrim($filePath, '/');
}

