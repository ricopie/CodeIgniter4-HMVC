<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultNamespace('AppModules\Welcome\Controllers');
$routes->get('welcome', 'Welcome::index');