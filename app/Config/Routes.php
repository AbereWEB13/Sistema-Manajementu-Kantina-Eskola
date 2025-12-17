<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Store login Auth Password

$routes->get('/auth', 'Auth::login');
$routes->get('/search', 'Frontend::search');


// Parte Login
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/login', 'Auth::loginProcess');


// Parte Register Login
$routes->get('/auth/register', 'Auth::register');
$routes->post('/auth/register', 'Auth::registerProcess');

$routes->group('', ['filter' => 'auth'], function ($routes) {

    // Hamosu Dashboard
    $routes->get('/', 'Home::index');
    $routes->get('home', 'Home::index');


    // Hamosu Tabela
    $routes->get('costumer', 'Costumer::index');
    $routes->get('kategoria', 'Kategoria::index');
    $routes->get('fatin', 'Fatin::index');
    $routes->get('kontraktu',  'Kontraktu::index');
    $routes->get('costumer', 'Costumer::index');
    $routes->get('role', 'Role::index');
    $routes->get('user', 'User::index');
    $routes->get('pagamentu', 'Pagamentu::index');
    $routes->get('produtu', 'Produtu::index');
    $routes->get('order', 'Order::index');

    $routes->get('dashboard', 'Dashboard::index');



    // Hamosu Frontend
    $routes->get('/frontend', 'Frontend::frontend');
    $routes->get('frontend', 'Frontend::frontend');



    //Add and Create
    $routes->get('costumer/add', 'Costumer::create');
    $routes->get('kategoria/add', 'Kategoria::create');
    $routes->get('produtu/add', 'Produtu::create');
    $routes->get('fatin/add', 'Fatin::create');
    $routes->get('role/add', 'Role::create');
    $routes->get('user/add', 'User::create');
    $routes->get('kontraktu/add', 'Kontraktu::create');
    $routes->get('pagamentu/add', 'Pagamentu::create');
    $routes->get('order/add', 'Order::create');

    //Store
    $routes->post('costumer/store', 'Costumer::store');
    $routes->post('kategoria/store', 'Kategoria::store');
    $routes->post('produtu/store', 'Produtu::store');
    $routes->post('fatin/store', 'Fatin::store');
    $routes->post('role/store', 'Role::store');
    $routes->post('user/store', 'User::store');
    $routes->post('kontraktu/store', 'Kontraktu::store');
    $routes->post('pagamentu/store', 'Pagamentu::store');
    $routes->post('order/store', 'Order::store');

    // Edit 
    $routes->get('/costumer/edit/(:num)', 'Costumer::edit/$1');
    $routes->get('/kontraktu/edit/(:num)', 'Kontraktu::edit/$1');
    $routes->get('/kategoria/edit/(:num)', 'Kategoria::edit/$1');
    $routes->get('/produtu/edit/(:num)', 'Produtu::edit/$1');
    $routes->get('/fatin/edit/(:num)', 'Fatin::edit/$1');
    $routes->get('/role/edit/(:num)', 'Role::edit/$1');
    $routes->get('/user/edit/(:num)', 'User::edit/$1');
    $routes->get('/pagamentu/edit/(:num)', 'Pagamentu::edit/$1');
    $routes->get('/order/edit/(:num)', 'Order::edit/$1');

    // Update 
    $routes->post('/costumer/update/', 'Costumer::update');
    $routes->post('/kontraktu/update/', 'Kontraktu::update');
    $routes->post('/kategoria/update/', 'kategoria::update');
    $routes->post('/produtu/update/', 'Produtu::update');
    $routes->post('/empregador/update/', 'Empregador::update');
    $routes->post('/fatin/update/', 'Fatin::update');
    $routes->post('/role/update/', 'Role::update');
    $routes->post('/pagamentu/update/', 'Pagamentu::update');
    $routes->post('/order/update/', 'Order::update');

    // routes ketak  
    $routes->post('/user/update/(:num)', 'User::update/$1');


    //Delete
    $routes->get('costumer/delete/(:num)', 'Costumer::delete/$1');
    $routes->get('kategoria/delete/(:num)', 'Kategoria::delete/$1');
    $routes->get('produtu/delete/(:num)', 'Produtu::delete/$1');
    $routes->get('kontraktu/delete/(:num)', 'Kontraktu::delete/$1');
    $routes->get('fatin/delete/(:num)', 'Fatin::delete/$1');
    $routes->get('pagamentu/delete/(:num)', 'Pagamentu::delete/$1');
    $routes->get('user/delete/(:num)', 'User::delete/$1');
    $routes->get('role/delete/(:num)', 'Role::delete/$1');
    $routes->get('order/delete/(:num)', 'Order::delete/$1');


    // NOTA
    $routes->get('/costumer/note/(:num)', 'Costumer::note/$1');
    $routes->get('/kategoria/note/(:num)', 'Kategoria::note/$1');
    $routes->get('/fatin/note/(:num)', 'Fatin::note/$1');

    // View Prosesu dadus
    $routes->get('/produtu/note/(:num)', 'Produtu::note/$1');
    $routes->get('/order/note/(:num)', 'Order::note/$1');
    $routes->get('/kontraktu/note/(:num)', 'Kontraktu::note/$1');
    $routes->get('/pagamentu/note/(:num)', 'Pagamentu::note/$1');

    // Report Relatoriu 
    $routes->get('/order/print', 'Order::print');
    $routes->get('/kontraktu/print', 'Kontraktu::print');
    $routes->get('/pagamentu/print', 'pagamentu::print');



    // logout
    $routes->get('/auth/logout', 'Auth::logout');
});


$routes->set404Override(function () {
    echo view('errors/404');
});
