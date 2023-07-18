<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();


// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/halodunia', 'HelloWorld::halodunia');
// Tugas bab 2
// $routes->get('/form', 'Form::index');
// $routes->match(['post'], '/form-submit', 'FormController::submit');
// // Tugas bab 3
// $routes->get('/', 'Home::index');
// $routes->get('/', 'HomeController::index');
// $routes->get('/profile', 'ProfileController::index');
// $routes->get('/experience', 'ExperienceController::index');
// // Latihan 3.1
// $routes->get('/latihanview', 'HelloWorld::index');
// // Latihan 3.2
$routes->get('/panggil', 'pemanggil_ahmad::index');
// // Kamis 22 Juni
// $routes->get('/', 'Pages::index');
// $routes->get('/Pages/service', 'Pages::service');
// Latihan Bab 5
$routes->get('/crud', 'Crud::index');
$routes->get('/crud/tambah', 'Crud::tambah');
$routes->get('/crud/hapus', 'Crud::hapus');
$routes->get('/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->get('/crud/editan', 'Crud::editan');
$routes->get('/crud/hapus/(:segment)', 'Crud::hapus/$1');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
