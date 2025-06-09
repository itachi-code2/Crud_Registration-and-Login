<?php

use App\Controllers\AuthController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', [AuthController::class, 'loginForm']);

$routes->get('/register', [AuthController::class, 'register']);

$routes->post('/register', [AuthController::class, 'store']);
$routes->post('/login', [AuthController::class, 'authenticate']);

$routes->post('/logout', [AuthController::class, 'logout']);

$routes->get('/dashboard', 'Home::dashboard', ['filter' => 'auth']);

