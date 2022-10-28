<?php
require dirname(__DIR__).'/model/databaseactions.php';
require dirname(__DIR__).'/config.php';

if(isset($_REQUEST) && !empty($_REQUEST)){
    DatabaseActions::RegisterClient($_REQUEST);
    header('Location: '.ROOT.'/views/thanks.html');
    exit;
}