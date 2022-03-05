<?php

namespace App\Router;

use App\Exception\RouteNotFoundException;

class Router 
{
    private array $routes;
    
    public function register(string $path, callable|array $action): void
    {
        $this->routes[$path] = $action;
    }

    public function resolve(string $uri): mixed
    {
        $path = explode('?', $uri)[0];
        $action = $this->routes[$path] ?? null;

        if (is_callable($action)) {
            return $action();
        }

        if (is_array($action)) {
            [$controller, $method] = $action;

            if (class_exists($controller) && method_exists($controller, $method)) {
                return call_user_func_array([new $controller(), $method], []);
            }
        }
        
        throw new RouteNotFoundException();
    }
}