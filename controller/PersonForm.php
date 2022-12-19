<?php

    use App\Model\Person;

    class PersonForm{
        private $path;
        private $html;
        private $data;

        function __construct(){
            $this->path = dirname(__DIR__);
            $this->html = file_get_contents( $this->path.'/views/form.html' );
            $this->data = array(
                'id' => null,
                'name' => null,
                'address' => null,
                'district' => null,
                'phone' => null,
                'email' => null,
                'id_city' => null
            );

        }

        public function setRegisterPersonHtml(){
            $this->html = file_get_contents($this->path.'/views/form-register.html');
        }

        public function deletePerson(){
            Person::deletePerson($_REQUEST['id']);
        }

        public function showPage(){
            print $this->html;
        }
    }
