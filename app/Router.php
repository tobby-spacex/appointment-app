<?php

class Router
{

    static function abort() {
        http_response_code(404);
    
        echo 'Page not found';
        die();
    }
    
    function routeToController($urlPath, $routes) {
        if (array_key_exists($urlPath, $routes)) {
            require $routes[$urlPath];
        } else {
            $this->abort();
        }
        
    }
}