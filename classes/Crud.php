<?php 
require 'Connexion.php';
Connexion::connect();
class Crud 
{
  

      static function create ($table,$data){
        $columns= implode(',',array_keys($data));
        $values= implode(',',array_fill(0,count($data),'?'));
        $sql="INSERT INTO $table ($columns) values ($values)";
        $stmt = Connexion :: $conn->prepare($sql);
        $stmt-> execute(array_values($data));
        return Connexion :: $conn->lastInsertId();
      }

      static function read($table,$id){

        $sql="SELECT * FROM $table WHERE id= ?";
        $stmt= Connexion :: $conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
      }

      static function update($table,$id,$data){
        $columns=implode(' = ?, ',array_keys($data)) . ' = ?';
        $sql="UPDATE $table SET  $columns  WHERE id = ?";
        $stmt= Connexion :: $conn->prepare($sql);
        $stmt->execute(array_merge(array_values($data), [$id]));
      }

      

}