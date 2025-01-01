<?php 

class Connexion
{
private static $host="localhost";
private static $dbName="CRUD_DUNAMYC";
 private static $username="root";
      private static $password= "";
      static $conn;
      static function connect(){
        if(self :: $conn==null){
            try {
                self::$conn = new PDO(
                    "mysql:host=" . self::$host . ";dbname=" . self::$dbName,
                    self::$username,
                    self::$password
                ); 
            
          }
          catch(PDOException $e){
            die("error de connection !:". $e->getMessage());

        }
        }
        return self :: $conn;
      }
  }