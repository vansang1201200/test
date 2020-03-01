<?php

namespace App\Core;

class Router {
    // protected $routes = [];

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    // public function define($routes)
    // {
    //     $this->routes = $routes;
    // }

    public function get($uri, $controller)
    {

        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {

        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        // die(var_dump($uri, $requestType));

        // if (array_key_exists($uri, $this->routes[$requestType])) {
        //     return $this->routes[$requestType][$uri];
        // }
        
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new \Exception("Route {$uri} Không xác định");
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        // var_dump($controller);
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new \Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        return $controller->$action();
    }

}