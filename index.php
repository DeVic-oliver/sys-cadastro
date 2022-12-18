<?php 

spl_autoload_register(
    function($class){ 
        require "controller/$class.php"; 
    }
);

if(isset($_REQUEST) && isset($_REQUEST['class'])) {
    $page = new $_REQUEST['class'];

    if(isset($_REQUEST['method'])){
        call_user_func( array( $page, $_REQUEST['method'] ) );
    }
    
    $page->showPage();
    
}else{
   $index = new IndexController();
   $index->showPage();
}