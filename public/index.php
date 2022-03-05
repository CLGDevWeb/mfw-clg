<?php

use App\Controller\HomeController;
use App\Core\App;
use App\Router\Router;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router();

$router->register('/', [HomeController::class, 'index']);

$router->register('/json', [HomeController::class, 'json']);

$router->register('/about', function () {
    return 'AboutPage';
});

(new App($router, $_SERVER['REQUEST_URI']))->run();