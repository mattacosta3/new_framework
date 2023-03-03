<?php

namespace app\controllers;

Class pagesControllers{

        public function home(){
            
            return view('index');
        }

        
        public function contact(){
            return view('contact');
        }

        
        public function about(){
            $company = 'Hulsters';
            return view('about', compact('company'));
        }

        
        public function aboutculture(){
            $name = 'Matthews House';
            
            return view('aboutculture');
        }
}