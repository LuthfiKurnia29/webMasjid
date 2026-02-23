<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/jadwal', 'Home::jadwal');
$routes->get('/program', 'Home::program');
$routes->get('/donasi', 'Home::donasi');
$routes->get('/kontak', 'Home::kontak');
