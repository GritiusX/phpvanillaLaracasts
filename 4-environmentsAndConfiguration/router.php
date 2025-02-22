<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//dd($uri);

/* Old version */

/* if ($uri === '/') {
    require "controllers/index.php";
} else if ($uri === '/about') {
    require "controllers/about.php";
} else if ($uri === '/contact') {
    require "controllers/contact.php";
} else {
    require "controllers/404.php";
} */

$routes = [
    '/' => "controllers/index.php",
    '/about' => "controllers/about.php",
    '/contact' => "controllers/contact.php",
];

function abort($code = 404)
{
    http_response_code($code);

    require "controllers/{$code}.php";
    die();
}
function routeToController($uri, $routes): void
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);
