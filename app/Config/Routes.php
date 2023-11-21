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
$routes->delete('/product/delete', 'Product::delete');

#=================== data customer ========================#
$routes->get('/customer', 'Home::customer');
$routes->post('/customer/add', 'Customer::addCustomers');
$routes->post('/customer/update', 'Customer::updatedCustomers');
$routes->delete('/product/delete', 'Customer::delete');


#=================== data users =============================#
$routes->get('/users', 'Home::users');
$routes->post('/users/add', 'Users::createUsers');
$routes->post('/users/update-active', 'Users::isactivedusers');


#=================== data supplier =============================#
$routes->get('/supplier', 'Home::supplier');
$routes->post('/supplier/add', 'Supplier::createSupplier');
$routes->delete('/supplier/delete', 'Supplier::delete');
$routes->post('/supplier/update', 'Supplier::update');


// /get-transaction-details'
#================ data transaksi pembelian barang ======================
$routes->get('/transaksi-pembelian', 'Home::transaksiPembelian');
$routes->get('/transaksi-penjualan', 'Home::transaksiPenjualan');


$routes->get('/product-by-supplier', 'Product::productBySupplierId');
$routes->get('/get-transaction-details', 'Transaksi::transaksiDetail');
$routes->post('/submit-transaction', 'Transaksi::submitTransaction');




// isactivedusers
// product/delete createUsers

