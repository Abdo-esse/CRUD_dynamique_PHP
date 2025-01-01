<?php 
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
    public function create(){
        Crud::
    } 
}