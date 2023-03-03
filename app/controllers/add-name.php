<?php

use app\core\App;

require 'oldwork/task.php';

//Alternate way to add todos into mysql table but not as flexible, only would work with this table;
// $newtodo = Request::getpost();
// $app['database']->addtodo('todos', $newtodo);
// $tasks = $app['database']->fetchAll('todos', 'Task'); 

App::get('database')->insert('todos', [
    'description' => $_POST['name'],
    'completed' => false,
]);

$tasks = App::get('database')->fetchAll('todos', 'Task');

require 'views/index.view.php';