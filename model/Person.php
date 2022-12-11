<?php

    namespace App\Model;

use PDO;

    class Person{
        
        private static $databaseConnection;

        public static function getConnection(){
            if(empty(self::$databaseConnection)){
                $connectionCredentials = parse_ini_file('config/dbFileCredentials.ini');
                $host = $connectionCredentials['host'];
                $dbName = $connectionCredentials['name'];
                $user = $connectionCredentials['user'];
                $password = $connectionCredentials['password'];

                $connectionsString = "";
                self::$databaseConnection = new PDO($connectionsString);

                self::$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            return self::$databaseConnection;
        }

        public static function SavePerson($personData){
            $connection = self::getConnection();

            if(empty($personData['id'])){
                $sqlStringQuery = "SELECT max(id) as next FROM personTable";
                $result = $connection->query($sqlStringQuery);
                $row = $result->fetch();

                $personData['id'] = (int) $row['next'] + 1;

                $sql = "INSERT INT personTable (person_id, person_name, person_address, person_district, person_phone, person_email, id_city)
                                    VALUES (:person_id, :person_name, :person_address, :person_district, :person_phone, :person_email, :id_city)";
            }else{
                $sql = "UPDATE personTable SET  person_name = :person_name, 
                                                person_address = :person_address, 
                                                person_district = :person_district, 
                                                person_phone = :person_phone, 
                                                person_email = :person_email,
                                                id_city = :id_city
                        WHERE person_id = :person_id";
            }

            $result = $connection->prepare($sql);
            $array = array(
                ':person_id' => $personData['id'],
                ':person_name' => $personData['name'],
                ':person_address' => $personData['address'],
                ':person_district' => $personData['district'],
                ':person_phone' => $personData['phone'],
                ':person_email' => $personData['email'],
                ':id_city'  => $personData['id_city']
            );
            $result->execute($array);
        }
    }