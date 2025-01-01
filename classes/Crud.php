<?php 
require 'Connexion.php'
class Crud 
{
    Connexion::connect();
      static function create ($table,$data){
        $columns= implode('?,',array_keys($data));
        $values= implode('?,',array_fill(0,count($data),'?'));
        $sql="INSERT INTO $table ($columns) values ($values)";
        $stmt = Connexion :: $conn->prepare($sql);
        $stmt-> execute(array_values($data))
      }

}