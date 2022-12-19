<?php
    use App\Model\Person as Person;
    
    include_once dirname(__DIR__) . '/model/Person.php';
    
    class PersonList{
        private $path;
        private $html;

        function __construct()
        {
            $this->path = dirname(__DIR__);
            $this->html = file_get_contents( $this->path . '/views/person-list.html' );  
            self::populateHtmlWithPersonRecords();         
        }
        private function populateHtmlWithPersonRecords(){

            $personRecords = Person::getAll();
            $this->html = str_replace( "{rows}", $personRecords, $this->html );
        }

        public function showPage(){
            print $this->html;
        }
    }