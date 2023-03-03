<?php

namespace app\controllers;
use app\core\App;


class tasksControllers
{
    public function index(){

            require 'oldwork/functions.php';
            require 'oldwork/task.php';
            require 'oldwork/fun.php';

            $tasks = App::get('database')->fetchAll('todos', 'Task');

        return view('tasks', compact('tasks'));
        }

    public function store(){
        require 'oldwork/task.php';

            //Alternate way to add todos into mysql table but not as flexible, only would work with this table;
            // $newtodo = Request::getpost();
            // $app['database']->addtodo('todos', $newtodo);
            // $tasks = $app['database']->fetchAll('todos', 'Task'); 

            App::get('database')->insert('todos', [
                'description' => $_POST['name'],
                'completed' => false,
            ]);

            return redirect('todos');
            // header('location: /todos');
    }
}    
