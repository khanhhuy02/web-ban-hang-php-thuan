<?php

namespace Support\src;

use App\Http\Controllers\TestController;

class Route
{
    public static $routes = [
        'GET' => [],
        'POST' => [],
     
    ];

    public static function get($route, $action)
    {
        self::$routes['GET'][$route] = $action;
    }

    public static function post($route, $action)
    {
        self::$routes['POST'][$route] = $action;
    }

    public static function put($route, $action)
    {
        self::$routes['POST'][$route] = $action;
    }

    public static function delete($route, $action)
    {
        self::$routes['GET'][$route] = $action;
    }
}