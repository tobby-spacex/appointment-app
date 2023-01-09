<?php

declare(strict_types = 1);

use App\Router;
use App\Controllers\HomeController;

require_once __DIR__ . '/../vendor/autoload.php';

define('VIEW_PATH', __DIR__ . '/../resources/views');

$router = new Router();

$router
    ->get('/', [HomeController::class, 'index'])
    ->post('/upload', [HomeController::class, 'upload'])
    ;

echo $router->resolve(
    $_SERVER['REQUEST_URI'],
    strtolower($_SERVER['REQUEST_METHOD'])
);
