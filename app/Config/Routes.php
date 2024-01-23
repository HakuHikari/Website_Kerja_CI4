<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index',);
$routes->get('/Daftar', 'Home::Daftar');
$routes->get('/Login', 'Home::Login');
$routes->get('/Homepage', 'Home::Homepage');
$routes->post('simpan-data', 'Home::simpanData');
$routes->add('home/kirimPesan', 'Home::kirimPesan');
$routes->post('Home/buatproject', 'Home::buatproject');
$routes->post('Home/login', 'Home::login');
$routes->get('Home/logout', 'Home::logout');
$routes->get('/Biodata', 'Home::Biodata');
$routes->get('/forum', 'Home::forum');
$routes->get('/buat', 'Home::buat');
$routes->get('/project', 'Home::project');






