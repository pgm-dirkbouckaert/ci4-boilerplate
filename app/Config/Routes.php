<?php

use App\Controllers\AuthController;
use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/**
 * AUTH ROUTES
 */
$routes->get('login', [AuthController::class, 'loginView'], ['as' => 'login']);
$routes->get('register', [AuthController::class, 'registerView'], ['as' => 'register']);
$routes->get('forgot-password', [AuthController::class, 'forgotPasswordView'], ['as' => 'forgot-password']);
$routes->get('login/magic-link', [AuthController::class, 'magicLinkView'], ['as' => 'magic-link']);
$routes->get('reset-password', [AuthController::class, 'resetPasswordView'], ['as' => 'reset-password']);
$routes->post('reset-password', [AuthController::class, 'handleResetPassword']);

service('auth')->routes($routes);
