<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

//using Closures
$routes->get('/', static function() {
  return view('welcome_message');
});
