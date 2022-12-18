<?php

    class PersonList{
        private $path;
        private $html;

        function __construct()
        {
            $this->path = dirname(__DIR__);
            $this->html = file_get_contents( $this->path . '/views/person-list.html' );            
        }

        public function showPage(){
            print $this->html;
        }
    }