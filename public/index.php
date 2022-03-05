<?php

use App\Controller\HomeController;
use App\Core\App;
use App\Router\Router;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router();

$router->get('/', [HomeController::class, 'index']);

$router->get('/json', [HomeController::class, 'json']);

$router->post('/users', [HomeController::class, 'store']);

$router->get('/about', function () {
    return 'AboutPage';
});

(new App($router, [
    'uri' => $_SERVER['REQUEST_URI'],
    'method' => $_SERVER['REQUEST_METHOD'],
]))->run();