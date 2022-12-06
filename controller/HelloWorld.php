<?php

class HelloWorld{
    
    private $views_path;
    private $html_hello;

    function __construct(){
        $views_path = dirname(__DIR__) . '/views';
        $path = $views_path . '/hello-world.html';
        $html_hello = file_get_contents($path);
        $html_hello = str_replace( '{link-to-page}', 'https://google.com', $html_hello );
        echo $html_hello;

    }

    public function SayHello(){
    }

}