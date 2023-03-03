<?php

namespace app\core;

class Router

{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file){
   
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller){
        $this->routes['GET'][$uri]=$controller;
    }

    public function post($uri, $controller){
        $this->routes['POST'][$uri]=$controller;
    }

    public function direct($uri, $methodtype){
        // var_dump($uri, $methodtype);
        if (array_key_exists($uri, $this->routes[$methodtype])) {
            
            return $this->callAction(
                ... explode('@', $this->routes[$methodtype][$uri])
            );
            
        }

        throw new Exception ('No route defined for the URI.');
    }

    protected function callAction($controller, $action){

        $controller = "app\\controllers\\{$controller}";
        $controller = new $controller;

        // die(var_dump($controller, $action));
        if (! method_exists($controller, $action)){
            throw new Exception(
                "Controller does not respond to the action."
            );
        }
        return $controller->$action();
    }
};