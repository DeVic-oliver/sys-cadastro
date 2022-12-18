<?php

    use App\Model\Person;
    use App\Model\City;

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


            // $cities = '';
            // foreach(City::GetAllCities() as $city){
            //     $cities .= "<option value='{$city['id']}>{$city['name']}</option>";
            // }

            // $this->html = str_replace('{cities}', $cities, $this->html);
        }

        // public function editPerson($param){
        //     try {
        //         $id = (int) $param['id'];
        //         $person = Person::findPerson($id);
        //         $this->data = $person;
        //     } catch (\Exception $e) {
        //         print $e->getMessage();
        //     }
        // }

        public function showPage(){
            print $this->html;
        }
    }
