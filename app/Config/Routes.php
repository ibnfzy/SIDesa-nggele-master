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
$routes->get('/berita', 'Home::berita');
$routes->get('/berita/(:any)', 'Home::detail_berita/$1');
$routes->get('/keunggulan', 'Home::keunggulan');
$routes->get('/keunggulan/(:any)', 'Home::detail_keunggulan/$1');
$routes->get('/profil', 'Home::profil');
$routes->get('/sejarah', 'Home::sejarah');
$routes->get('/peta', 'Home::peta');
$routes->get('/visi-misi', 'Home::visimisi');
$routes->get('/pemerintah', 'Home::pemerintah');
$routes->get('/aspirasi', 'Home::aspirasi');
$routes->post('aspirasi/store', 'Home::store_aspirasi');

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

// * Route Peta Desa
$routes->get('m-admin/peta-desa/(:any)', 'Admin::peta_desa/$1');
$routes->post('m-admin/peta-desa/simpan/(:any)', 'Admin::update_peta/$1');

// * Route Keunggulan Desa
$routes->get('m-admin/keunggulan-desa/', 'Admin::keunggulan');
$routes->get('m-admin/keunggulan-desa/add', 'Admin::add_keunggulan');
$routes->post('m-admin/keunggulan-desa/store', 'Admin::store_keunggulan');
$routes->get('m-admin/keunggulan-desa/edit/(:any)', 'Admin::edit_keunggulan/$1');
$routes->post('m-admin/keunggulan-desa/update/(:any)', 'Admin::update_keunggulan/$1');
$routes->get('m-admin/keunggulan-desa/delete/(:any)', 'Admin::delete_keunggulan/$1');
$routes->get('m-admin/keunggulan-desa/detail/(:any)', 'Admin::detail_keunggulan/$1');

// * Route Visi Misi Desa
$routes->get('m-admin/visimisi/(:any)', 'Admin::visi_misi/$1');
$routes->post('m-admin/visimisi/simpan/(:any)', 'Admin::update_visi_misi/$1');

// * Route Pemerintah Desa
$routes->get('m-admin/pemerintah/(:any)', 'Admin::pemerintah_desa/$1');
$routes->post('m-admin/pemerintah/simpan/(:any)', 'Admin::update_pemerintah/$1');

// * Route Berita
$routes->get('m-admin/berita', 'Admin::berita');
$routes->get('m-admin/berita/add', 'Admin::add_berita');
$routes->post('m-admin/berita/store', 'Admin::store_berita');
$routes->get('m-admin/berita/detail/(:any)', 'Admin::detail_berita/$1');
$routes->get('m-admin/berita/edit/(:any)', 'Admin::edit_berita/$1');
$routes->post('m-admin/berita/update/(:any)', 'Admin::update_berita/$1');
$routes->get('m-admin/berita/delete/(:any)', 'Admin::delete_berita/$1');

// * Route Penduduk
$routes->get('m-admin/penduduk', 'Admin::penduduk');
$routes->get('m-admin/penduduk/add', 'Admin::add_penduduk');
$routes->post('m-admin/penduduk/store', 'Admin::store_penduduk');
$routes->get('m-admin/penduduk/edit/(:any)', 'Admin::edit_penduduk/$1');
$routes->post('m-admin/penduduk/update/(:any)', 'Admin::update_penduduk/$1');
$routes->get('m-admin/penduduk/delete/(:any)', 'Admin::detele_penduduk/$1');
$routes->get('m-admin/penduduk/detail/(:any)', 'Admin::detail_penduduk/$1');

// * Route Pelayanan Aspirasi
$routes->get('m-admin/aspirasi', 'Admin::aspirasi');
$routes->get('m-admin/aspirasi/detail/(:any)', 'Admin::detail_aspirasi/$1');
$routes->get('m-admin/aspirasi/delete/(:any)', 'Admin::delete_aspirasi/$1');

// * Route Slider
$routes->get('m-admin/slider', 'Admin::slider');
$routes->get('m-admin/slider/add', 'Admin::add_slider');
$routes->post('m-admin/slider/store', 'Admin::store_slider');
$routes->get('m-admin/slider/edit/(:any)', 'Admin::edit_slider/$1');
$routes->post('m-admin/slider/update/(:any)', 'Admin::update_slider/$1');
$routes->get('m-admin/slider/delete/(:any)', 'Admin::delete_slider/$1');

// * Route Pelayanan Surat
$routes->get('m-admin/pelayanan-surat', 'Admin::pelayanan_surat');
$routes->post('m-admin/pelayanan-surat/store', 'Admin::store_surat');
$routes->post('m-admin/pelayanan-surat/update/(:any)', 'Admin::update_surat/$1');
$routes->get('m-admin/pelayanan-surat/delete/(:any)', 'Admin::delete_surat/$1');
$routes->get('m-admin/pelayanan-surat/create/(:any)', 'Admin::create_surat/$1');
$routes->post('m-admin/pelayanan-surat/log/(:any)', 'Admin::log_surat/$1');

// * Route Arsip Surat
$routes->get('m-admin/arsip-surat', 'Admin::arsip_surat');
$routes->get('m-admin/arsip-surat/download/(:any)', 'Admin::download_surat/$1');
$routes->get('m-admin/arsip-surat/delete/(:any)', 'Admin::delete_log_surat/$1');


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