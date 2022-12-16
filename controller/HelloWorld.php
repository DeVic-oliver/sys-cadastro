<?php

class HelloWorld{
    
    private $views_path;
    private $html_hello;

    function __construct(){  
        //$path = GetPathToView();
        $html_hello = file_get_contents(dirname(__DIR__) .'/views/hello-world.html');
        print $html_hello;
    }

    private function GetPathToView(){
        $views_path = dirname(__DIR__) . '/views';
        $path = $views_path . '/hello-world.html';
        return $path;
    }
    public function Redirect(){
        header('Location: https://google.com');
    }
}