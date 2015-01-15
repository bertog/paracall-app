<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/', [
    '_controller' => 'App\Controllers\HomeController::index',
]));

$routes->add('auth', new Route('/auth', [
    '_controller' => 'App\Controllers\AuthController::index',
]));

return $routes;
