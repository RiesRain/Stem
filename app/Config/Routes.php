<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//controller auth
$routes->get('/', 'App\Controllers\Dashboard::index');
$routes->group('auth', function ($routes) {
    $routes->add('login', 'App\Modules\Auth\Controllers\Auth::login');
    $routes->add('logout', 'App\Modules\Auth\Controllers\Auth::logout');
    $routes->add('register', 'App\Modules\Auth\Controllers\Auth::register');
});

//controller admin
$routes->group('admin', function ($routes) {
    $routes->add('game', 'App\Modules\Admin\Controllers\Game::index');
    $routes->add('game/(:any)', 'App\Modules\Admin\Controllers\Game::$1');
    $routes->add('genre', 'App\Modules\Admin\Controllers\Genre::index');
    $routes->add('genre/(:any)', 'App\Modules\Admin\Controllers\Genre::$1');
    $routes->add('publisher', 'App\Modules\Admin\Controllers\Publisher::index');
    $routes->add('publisher/(:any)', 'App\Modules\Admin\Controllers\Publisher::$1');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
