<?php

use App\Controllers\PagesController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', [PagesController::class, 'home']);
$routes->get('/user-guide', [PagesController::class, 'userGuide']);
$routes->get('/faq', [PagesController::class, 'faq']);
