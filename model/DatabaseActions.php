<?php

class DatabaseActions{
    public static $db_connection;

    public static function getConnection(){
        if( empty(self::$db_connection) ){
            try{
                $credentials = parse_ini_file( dirname(__DIR__).'/config/db-cred.ini' );
                $db_host = $credentials['servername'];
                $db_name = $credentials['dbname'];
                $db_user = $credentials['username'];
                $db_pass = $credentials['password'];
                self::$db_connection = new PDO("mysql:host=$db_host;dbname=$db_name;port=3306", $db_user, $db_pass);
                self::$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
            
        }else{
            return self::$db_connection;
        }
    }

    public static function RegisterClient($client){
        self::getConnection();
        $sql = "INSERT INTO client (first_name, last_name, age, gender, email, client_username, client_password) 
        VALUES (:first_name, :last_name, :age, :gender, :email, :client_username, :client_password)";
        $result = self::$db_connection->prepare($sql);
        $result->execute(array(
            ':first_name' => $client['client-first-name'],
            ':last_name' => $client['client-last-name'],
            ':age' => $client['client-age'],
            ':gender' => $client['client-gender'],
            ':email' => $client['client-email'],
            ':client_username' => $client['client-username'],
            ':client_password' => $client['client-password'],
        ));

    }
    public static function DeleteClient(){}
    public static function ListClients(){
        self::getConnection();
     
        $sql = "SELECT * FROM client";
        
        $results = self::$db_connection->query($sql);
        return $results;

    }
    public static function GetClient($client_id){}
    public static function EditClient($client_id){}

}