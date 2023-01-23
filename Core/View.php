<?php

namespace Kodlazim\Core;
use Jenssegers\Blade\Blade;
class View
{
    /**
     * @param string $viewName
     * @param array $data
     * @return bool|string
     */
    public static function show(string $viewName, array $data = []) :string
    {


        $blade = new Blade(dirname(__DIR__) . '/resources/views', dirname(__DIR__) . '/storage/cache');

        return $blade->render($viewName, $data);

//        extract($data);
//        $viewName = str_replace('.', '/', $viewName);
//        ob_start();
//        require dirname(__DIR__ ) . '/resources/views/' . $viewName . '.php';
//        return ob_get_clean();
    }

    public static function showAdmin(string $viewName, array $data = []) :string
    {


        $blade = new Blade(dirname(__DIR__) . '/resources/views/adminView', dirname(__DIR__) . '/storage/cache');

        return $blade->render($viewName, $data);

//        extract($data);
//        $viewName = str_replace('.', '/', $viewName);
//        ob_start();
//        require dirname(__DIR__ ) . '/resources/views/' . $viewName . '.php';
//        return ob_get_clean();
    }

}