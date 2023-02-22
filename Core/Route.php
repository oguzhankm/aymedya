<?php

namespace Kodlazim\Core;

use Kodlazim\Core\Response;


use Kodlazim\Core\Helpers\Redirect;

class Route
{
    public static array $patterns = [
        ':id[0-9]?' => '([0-9]+)',
        ':url[0-9]?' => '([0-9a-zA-Z-_]+)'
    ];

    public static bool $hasRoute = false;
    public static array $routes = [];
    public static string $prefix = '';
    public static string $namespace = '';


    /**
     * @param string $path
     * @param $callback
     * @return Route
     */
    public static function get(string $path, $callback): Route
    {
        self::$routes['get'][self::$prefix . rtrim($path, '/')] = [
            'callback' => $callback
        ];
        return new self();
    }

    /**
     * @param string $path
     * @param callable|string $callback
     * @return void
     */
    public static function post(string $path, $callback): void
    {
        self::$routes['post'][rtrim($path, '/')] = [
            'callback' => $callback
        ];
    }


    public static function dispatch(): void
    {
        $url = rtrim(self::getUrl(), '/');
        $method = self::getMethod();
        foreach (self::$routes[$method] as $path => $props) {
            foreach (self::$patterns as $key => $pattern) {
                $path = preg_replace('#' . $key . '#', $pattern, $path);
            }
            $pattern = '#^' . $path . '$#';
            if (preg_match($pattern, $url, $params)) {
                self::$hasRoute = true;
                array_shift($params);

                if (isset($props['redirect'])) {
                    Redirect::to($props['redirect'], $props['status']);
                } else {

                    $callback = $props['callback'];

//                    if (is_callable($callback)) {
//                        echo call_user_func_array($callback, $params);
//                    } elseif (is_string($callback)) {
//                        [$controllerName, $methodName] = explode('@', $callback);
//                        if (!empty(self::$namespace)) {
//                            $controllerName = '\Kodlazim\App\Controllers\\' . ucfirst(self::$namespace) . '\\' . ltrim($controllerName, '\\');
//                        } else {
//                            $controllerName = '\Kodlazim\App\Controllers\\' . $controllerName;
//                        }
//                        $controller = new $controllerName();
//                        echo call_user_func_array([$controller, $methodName], $params);
//
//                    }

                    if (is_callable($callback)) {
                        echo call_user_func_array($callback, $params);
                    } elseif (is_string($callback)) {
                        [$controllerName, $methodName] = explode('@', $callback);
                        $controllerName = '\Kodlazim\App\Controllers\\' . $controllerName;


                        $controller = new $controllerName();
                        echo call_user_func_array([$controller, $methodName], $params);

                    }

                }

            }
        }
        self::hasRoute();
    }


    public static function hasRoute()
    {
        if (self::$hasRoute === false) {
            Response::setStatusCode(404);
            echo view('_404Page');
        }

    }

    /**
     * @return string
     */
    public static function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    /**
     * @return string
     */
    public static function getUrl(): string
    {
        $route = str_replace(getenv('BASE_PATH'), null, $_SERVER['REQUEST_URI']);

        $url = $route ?? '/';

        $position = strpos($url, '/?');

        if ($position === false) {
            return str_replace('/?', null, $url);
        }
        return substr($url, 0, $position);
    }

    public function name(string $name): void
    {
        $key = array_key_last(self::$routes['get']);
        self::$routes['get'][$key]['name'] = $name;
    }

    /**
     * @param string $name
     * @param array $params
     * @return string
     */
    public static function url(string $name, array $params = []): string
    {
        $route = array_key_first(array_filter(self::$routes['get'], function ($route) use ($name) {
            return isset($route['name']) && $route['name'] === $name;
        }));
        return getenv('BASE_PATH') . str_replace(array_map(fn($key) => ':' . $key, array_keys($params)), array_values($params), $route);
    }


    /**
     * @param $prefix
     * @return Route
     */
    public static function prefix($prefix): Route
    {
        self::$prefix = $prefix;
        return new self();
    }

    /**
     * @param $attributes
     * @param \Closure $closure
     * @return void
     */
    public function group($attributes, \Closure $closure): void
    {
//        if (is_callable($attributes)) {
//            $attributes();
//        } else {
//            if (isset($attributes['namespace']) && !empty($attributes['namespace'])) {
//                self::$namespace = $attributes['namespace'];
//            }
//            $closure();
//        }
//        self::$prefix = '';

        $closure();
        self::$prefix = '';
    }


    public function where($key, $pattern)
    {
        self::$patterns[':' . $key] = '(' . $pattern . ')';
    }

    public static function redirect($from, $to, $status = 301)
    {
        self::$routes['get'][$from] = [
            'redirect' => $to,
            'status' => $status
        ];
    }

    public static function setStatusCode($code)
    {
        return http_response_code($code);

    }

    public static function activeRoute(string $name): bool
    {
        return getenv('BASE_PATH') . self::getUrl() === rtrim(parse_url(self::url($name))['path'], '/');
    }

}