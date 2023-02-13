<?php

declare(strict_types = 1);

use App\Router;
use App\Controllers\AuthController;
use App\Controllers\HomeController;

require_once __DIR__ . '/../vendor/autoload.php';

define('VIEW_PATH', __DIR__ . '/../resources/views');

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$router = new Router();

$router
    ->get('/', [HomeController::class, 'index'])
    ->get('/signup', [AuthController::class, 'signup'])
    ->get('/login', [AuthController::class, 'login'])
    ->post('/register', [AuthController::class, 'register'])
    ->post('/signin', [AuthController::class, 'signin'])
    ->post('/upload', [HomeController::class, 'upload'])
    ;

echo $router->resolve(
    $_SERVER['REQUEST_URI'],
    strtolower($_SERVER['REQUEST_METHOD'])
);
