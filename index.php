<?php 

spl_autoload_register(function($class){
    require "controller/$class.php";
});

// $path_root = __DIR__;

$helloWorld = new HelloWorld();
$helloWorld->SayHello();