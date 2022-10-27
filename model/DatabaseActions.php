<?php

class DatabaseActions{
    public static $db_connection;

    public static function getConnection(){
        if( empty(self::$db_connection) ){
            $credentials = parse_ini_file( dirname(__DIR__).'/config/db-cred.ini' );
            $db_host = $credentials['servername'];
            $db_name = $credentials['dbname'];
            $db_user = $credentials['username'];
            $db_pass = $credentials['password'];
            self::$db_connection = new PDO("mysql:host=$db_host;dbname=$db_name;user=$db_user;password=$db_pass");
            self::$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }else{
            return self::$db_connection;
        }
    }

    public static function RegisterClient($client){
        $db_connection = self::getConnection();

        if(empty($client['id'])){
            $result = $db_connection->query("SELECT max(id) as next FROM client");
            $row = $result->fetch();
            $client['id'] = (int) $row['next'] + 1;

            $sql = "INSERT INTO client (id, first_name, last_name, age, gender, email, client_username, client_password)
                                VALUES (:id, :first_name, :last_name; :age, :gender, :email, :client_username, :client_password)";
        }else{
            $sql = "UPDATE client SET first_name = :first_name,
                                        last_name = :last_name,
                                        age = :age,
                                        gender = :gender,
                                        email = :email,
                                        client_username = :client_username,
                                        client_password = :client_password WHERE id = :id";
        }

        $result = $db_connection->prepare($sql);
        $result->execute([
            ':id' => $client['id'],
            ':first_name' => $client['nome'],
            ':last_name' => $client['last_name'],
            ':age' => $client['age'],
            ':gender' => $client['gender'],
            ':email' => $client['email'],
            ':client_username' => $client['client_username'],
            ':client_password' => $client['client_password']
        ]);

    }
    public static function DeleteClient(){}
    public static function ListClients(){}
    public static function GetClient($client_id){}
    public static function EditClient($client_id){}

}