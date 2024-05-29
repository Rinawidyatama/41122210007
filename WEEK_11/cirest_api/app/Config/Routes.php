<?php

use App\Controllers\Fakultas;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->resource('fakultas');
$routes->post('db_utama', 'Fakultas::create');
