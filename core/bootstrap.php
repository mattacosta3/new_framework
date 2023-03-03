<?php
use app\core\App;



App::bind('config', require 'config.php');


App::bind(
    'database', new Querybuilder(Connection:: make(App::get('config')['database'])
)); 


function view($name, $data=[]){

    extract($data);

    return require "views/$name.view.php";
}

function redirect($path){
    header("location: /{$path}");
}