<?php

namespace App\Router;

use App\Exception\RouteNotFoundException;

class Router 
{
    private array $routes = [];
    
    public function register(string $path, callable|array $action, string $httpMethod): void
    {
        $this->routes[$httpMethod][$path] = $action;
    }

    public function get(string $path, callable|array $action): void
    {
        $this->register($path, $action, 'GET');
    }

    public function post(string $path, callable|array $action): void
    {
        $this->register($path, $action, 'POST');
    }

    public function resolve(string $uri, string $httpMethod): mixed
    {
        $path = explode('?', $uri)[0];
        $action = $this->routes[$httpMethod][$path] ?? null;

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

    public function getRoutes(): array
    {
        return $this->routes;
    }
}