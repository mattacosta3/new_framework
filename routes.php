<?php

// $router ->define([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'about-culture' => 'controllers/about-culture.php',
//     'contact' => 'controllers/contact.php',
//     'names' => 'controllers/add-name.php'
// ]);

$router->get('', 'pagesControllers@home');
$router->get('about', 'pagesControllers@about');
$router->get('about-culture', 'pagesControllers@aboutculture');
$router->get('contact', 'pagesControllers@contact');


$router->get('todos', 'tasksControllers@index');
$router->post('todos', 'tasksControllers@store');


// die(var_dump($router->routes));