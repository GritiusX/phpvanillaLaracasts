<?php

$routes = require "routes.php";

function abort($code = 404)
{
    http_response_code($code);

    require "controllers/{$code}.php";
    die();
}
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function routeToController($uri, $routes): void
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);
