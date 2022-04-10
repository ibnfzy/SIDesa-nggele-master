<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Admin');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// ? Route untuk tampilan depan
// ? Route index home pada tampilan depan
$routes->get('/', 'Home::index');

// * Route untuk tampilan admin
// * Route index admin-page / menu dashboard
$routes->get('m-admin', 'Admin::index');

// * Route admin 
$routes->get('m-admin/admin', 'Admin::admin');
$routes->get('m-admin/admin/add', 'Admin::add_admin');
$routes->post('m-admin/admin/store', 'Admin::store_admin');
$routes->get('m-admin/admin/edit/(:any)', 'Admin::edit_admin/$1');
$routes->get('m-admin/admin/delete/(:any)', 'Admin::delete_admin/$1');
$routes->post('m-admin/admin/update/(:any)', 'Admin::update_admin/$1');

// * Route Profile Desa
$routes->get('m-admin/profil-desa/(:any)', 'Admin::profil_desa/$1');
$routes->post('m-admin/profil-desa/simpan/(:any)', 'Admin::update_profil_desa/$1');
$routes->post('m-admin/profil-desa/simpan-informasi/(:any)', 'Admin::update_informasi_desa/$1');
$routes->post('m-admin/profil-desa/simpan-logo/(:any)', 'Admin::update_logo_desa/$1');

// * Route Sejarah Desa
$routes->get('m-admin/sejarah-desa/(:any)', 'Admin::sejarah_desa/$1');
$routes->post('m-admin/sejarah-desa/simpan/(:any)', 'Admin::update_sejarah_desa/$1');


// ? Route untuk tampilan login
// ? Route index login page
$routes->get('login', 'Login::index');
$routes->post('login/auth', 'Login::auth');
$routes->get('logout', 'Login::logout');

/**
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