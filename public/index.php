<?php

require_once '../app/Router.php';

$url = $_SERVER['REQUEST_URI'];

$urlPath = parse_url($url)['path'];

$routes = [
    '/' => '../app/Controllers/HomeController.php',
    '/about' => '../app/Controllers/AboutUs.php'
];


$router = new Router();


$router->routeToController($urlPath, $routes);