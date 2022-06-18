<?php

namespace Soon\Config;

$routes->get('/', '\Soon\Controllers\Home::index');
$routes->get('/soon/(:segment)', '\Soon\Controllers\Home::index/$1');

