<h1>index.php</h1>
<?php 
spl_autoload_register(function($class){ require "controller/$class.php"; });

if(isset($_REQUEST) && isset($_REQUEST['class'])) {
    $page_class = new $_REQUEST['class'];
    // $controller_method = $_REQUEST['method'];
    // if(method_exists($page_class, $controller_method)){
    //     $page_class->$controller_method;
    // }else{
    //     $page_class->show_index();
    // }
}else{
   new IndexController();
}
