<?php

    use App\Model\Person as Person;

    include_once dirname(__DIR__) . '/model/Person.php';

    class PersonForm{
        private $path;
        private $html;
        private $data;

        function __construct(){
            $this->path = dirname(__DIR__);
            $this->html = file_get_contents( $this->path . '/views/form-register.html' );
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

        public function registerPerson(){
            Person::savePerson($_POST);
        }

        public function deletePerson(){
            Person::deletePerson($_REQUEST['id']);
        }

        public function showPage(){
            print $this->html;
        }
    }
