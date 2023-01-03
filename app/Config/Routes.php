<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//storefront - home page
$routes->get('/', 'Home::index');

//storefront - collection page
$routes->get('/collections/all', 'Collections::index');

//storefront - view product page
$routes->get('/product/(:alphanum)', 'Product::view/$1');

//storefront - accessing the view product page controller directly should not be allowed
//so, route to home page
$routes->get('/product/view/(:any)', 'Product::index');

//admin - dashboard
$routes->get('/admin/dashboard', 'Admin::index');

//admin - add new product
$routes->get('/admin/products/add', 'Admin::addProduct');
$routes->post('/admin/products/add', 'Admin::addProduct');

//accessing the add product controller directly is not allowed, route to products list
$routes->get('/admin/addproduct', 'Admin::products');

//accessing the add product controller directly is not allowed, route to products list
$routes->get('/admin/addProduct', 'Admin::products');

//edit products
//$routes->get('/admin/products/(:alphanum)', 'Admin::addProduct');

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
