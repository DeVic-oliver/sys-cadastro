<?php

 

namespace App\Controller;

    use App\Model\Person;
    use App\Model\City;

    class PersonForm{
        private $html;
        private $data;

        public function __construct(){
            $this->html = file_get_contents( 'views/form.html' );
            $this->data = array(
                'id' => null,
                'name' => null,
                'address' => null,
                'district' => null,
                'phone' => null,
                'email' => null,
                'id_city' => null
            );

            print $this->html;

            // $cities = '';
            // foreach(City::GetAllCities() as $city){
            //     $cities .= "<option value='{$city['id']}>{$city['name']}</option>";
            // }

            // $this->html = str_replace('{cities}', $cities, $this->html);
        }

        public function editPerson($param){
            try {
                $id = (int) $param['id'];
                $person = Person::findPerson($id);
                $this->data = $person;
            } catch (\Exception $e) {
                print $e->getMessage();
            }
        }
    }
