<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'Home::register');
$routes->get('/forgot-password', 'Home::forgot');
$routes->get('/actived/(:num)', 'Users::isactived/$1');

// ======================================== //
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/barang', 'Home::product');
// ======================================== //


$routes->get('/reset-password/(:num)', 'Users::resendpassword/$1');
$routes->post('/forgot-password/users', 'Users::resetpassword');
$routes->post('/password-confirm', 'Users::updatepassword');
$routes->post('/users/register-member', 'Users::register');
$routes->post('/member/login', 'Users::login');

$routes->post('/layanan/add', 'Product::postProduk');
$routes->post('/layanan/update', 'Product::updateLayanan');
$routes->add('writable/uploads/(:any)', 'Files::index/$1');

$routes->post('product/delete', 'Product::delete');

