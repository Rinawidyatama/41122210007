<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Confirebase::index');
$routes->get('/', 'Home::index');
$routes->get('/notes', 'Confirebase::index');
