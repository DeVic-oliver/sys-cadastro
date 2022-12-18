<?php

    class IndexController{
        private $html;
        function __construct(){
            $root_path = dirname(__DIR__) . '/views';
            $index_html = file_get_contents($root_path . '/index.html');
            print $index_html;
            $this->html = file_get_contents($root_path . '/index.html');
        public function showPage(){
            print $this->html;
        }
    }