<?php 
include 'Crud.php';
class User 
{
    private $id;
    private $name ;
    private $email ;
    private $tele ;

    public function __construct($name,$email,$tele,$id=null){
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->tele=$tele;

    }
    public function getId(){
        return  $this->id;
    }
    public function create(){
        $this->id=Crud::create('users', ['name'=>$this->name,'email'=> $this->email,'tele'=> $this->tele]);
        
    } 
    public function update(){
        Crud:: update('users',$this->id, ['name'=>$this->name,'email'=> $this->email,'tele'=> $this->tele]);
        return $this->read();
    }
    public function readr(){
        $UserData=Crud::read('users', $this->id);
        $this->affectation($UserData);
        return  $this->__toString();
        // return $UserData;
    }

        public function affectation($UserData){
            $this->id=$UserData->id;
            $this->name=$UserData->name;
            $this->email=$UserData->email;
            $this->tele=$UserData->tele;
    
        }

   public function __toString(){
    return "ID : $this->id , Name : $this->name , Email : $this->email , tele:$this->tele ";
   }
   
}   