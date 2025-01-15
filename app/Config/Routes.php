<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('', ['filter' => 'auth:beforeLogin'], function ($routes) {
    $routes->get('/', 'Auth::index');
    $routes->post('/login', 'Auth::login');
});
$routes->group('', ['filter' => 'auth:afterLogin'], function ($routes) {
    $routes->get('/logout', 'Auth::logout');
    $routes->get('/dashboard', 'Dashboard::index');
});
