<?php

namespace App\Model;

    use PDO as PDO;
    
    class Person{
        
        private static $databaseConnection;

        public static function getConnection(){
            if(empty(self::$databaseConnection)){
                $connectionCredentials = parse_ini_file(dirname(__DIR__).'/config/db-cred.ini');
                $host = $connectionCredentials['servername'];
                $dbName = $connectionCredentials['dbname'];
                $user = $connectionCredentials['username'];
                $password = $connectionCredentials['password'];

                $connectionsString = "mysql:host=$host;dbname=$dbName";
                self::$databaseConnection = new PDO($connectionsString, $user, $password);

                self::$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            return self::$databaseConnection;
        }

        public static function savePerson($personData){
            $connection = self::getConnection();

            $sqlStringQuery = "SELECT max(id) as next FROM person";
            $result = $connection->query($sqlStringQuery);
            $row = $result->fetch();

            $personData['id'] = (int) $row['next'] + 1;
           
            $sql = "INSERT INTO person (id, first_name, last_name, email, person_password, person_role)
                                VALUES (:id, :first_name, :last_name, :email, :person_password, :person_role)";
            
            $result = $connection->prepare($sql);
            $array = array(
                ':id' => $personData['id'],
                ':first_name' => $personData['save-person-first-name'],
                ':last_name' => $personData['save-person-last-name'],
                ':email' => $personData['save-person-email'],
                ':person_password' => $personData['save-person-password'],
                ':person_role'  => $personData['save-person-role']
            );
            $result->execute($array);
        }

        public static function findPerson($id){
            $connection = self::getConnection();

            $sqlString = "SELECT * FROM person WHERE id='{$id}'";
            $result = $connection->query($sqlString);
            $personRow = $result->fetch();

            return $personRow;
        }

        public static function deletePerson($id){
            $connection = self::getConnection();

            $sql = "DELETE FROM person WHERE id={$id}";
            $result = $connection->prepare($sql);
            $result->execute();
        }

        public static function getAll(){
            $connection = self::getConnection();
            $sql = "SELECT * FROM person";
            $result = $connection->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
    }