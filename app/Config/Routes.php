<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Home');
// $routes->setDefaultMethod('index');

$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/contact', 'Home::contact');
$routes->get('/topics-detail', 'Home::topicsDetail');
$routes->get('/topics-listing', 'Home::topicsListing');
$routes->get('/monitoring-pica', 'Home::monitoringPica');
$routes->get('/grafik-kuadran', 'Home::grafikKuadran');

$routes->post('/upload', 'Upload::index');
$routes->post('/uploadKuadran', 'Upload::uploadKuadran');

$routes->post('/kuadran', 'Kuadran::getBulanTahunRpc');
$routes->get('/kuadranRpc', 'Kuadran::getAllRpc');
$routes->get('/kuadranKebun', 'Kuadran::getAllKebun');
$routes->get('/kuadranBulan', 'Kuadran::getAllBulan');
$routes->get('/kuadranTahun', 'Kuadran::getAllTahun');

$routes->post('/pica', 'Pica::getTahunBulanRpcKebun');
$routes->get('/picaRpc', 'Pica::getAllRpc');
$routes->get('/picaKebun', 'Pica::getAllKebun');
$routes->get('/picaBulan', 'Pica::getAllBulan');
$routes->get('/picaTahun', 'Pica::getAllTahun');
