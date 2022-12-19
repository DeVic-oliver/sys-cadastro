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
            $rows = '';
            foreach ($personRecords as $key => $value) {
                $rows .= "<tr>
                            <td>$value[id]</td>
                            <td>$value[first_name]</td>
                            <td>$value[last_name]</td>
                            <td>$value[email]</td>
                            <td>$value[person_role]</td>
                            <td><a href='?class=PersonForm&method=editPerson&id=$value[id]'>Editar</a></td>
                            <td><a href='?class=PersonForm&method=deletePerson&id=$value[id]'>Deletar</a></td>
                        </tr>";
            }
            $this->html = str_replace( "{rows}", $rows, $this->html );
        }

        public function showPage(){
            print $this->html;
        }
    }