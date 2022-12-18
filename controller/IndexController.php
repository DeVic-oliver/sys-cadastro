<?php

    class IndexController{
        function __construct(){
            $root_path = dirname(__DIR__) . '/views';
            $index_html = file_get_contents($root_path . '/index.html');
            print $index_html;
        }
    }