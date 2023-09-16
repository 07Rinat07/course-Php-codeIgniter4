<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tasks', 'Tasks::index');

$routes->get('/tasks/(:num)', 'Tasks::show/$1');
$routes->get('/tasks/new', 'Tasks::new');
$routes->post('/tasks/store', 'Tasks::store');

