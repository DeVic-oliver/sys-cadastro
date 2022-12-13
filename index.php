<?php

use App\Controller\PersonForm;

spl_autoload_register(function($class){

    if(file_exists($class.'.php')){
        require_once $class.'.php';
    }
});

if( !isset($_REQUEST['class']) ){
    require_once 'controller/PersonForm.php';

    $personForm = new PersonForm();
}

