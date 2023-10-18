<?php

namespace core;

class Router
{
    public static $routes = [
        "GET" => [],
        "POST" => [],
    ];

    public static function load($filename)
    {
        $router = new Router();
        require $filename;
        return $router;
    }

    public static function get($uri, $controller)
    {
        self::$routes['GET'][$uri] = $controller;
    }

    public static function post($uri, $controller)
    {
        self::$routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $method)
    {
        if (array_key_exists($uri, self::$routes[$method])) {
            $exploder = self::$routes[$method][$uri];
            $this->callAction($exploder[0], $exploder[1]);
        } else {
            view("pagenotfound");
            die();
        }
    }

    public function callAction($class, $method)
    {
        $class = new $class;
        return $class->$method();
    }
}
