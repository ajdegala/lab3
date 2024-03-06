<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\HomeController;

$routes->get('/', [HomeController::class, 'index']);
$routes->get('/', 'home::index');

/**
 * @var RouteCollection $routes
 */
