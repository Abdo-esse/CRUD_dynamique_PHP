<?php
require './classes/User.php';
// Connexion::connect();

// if(Connexion :: $conn!==null){
//     echo 'rerer';
//   }


$user= new User('Abdel ilah es','email','tele');
$user2= new User('name2','email2','tele2');

$user->create();
$user2->create();

// echo '<pre>';
// var_dump($user);
echo $user->readr();
echo $user2->readr();
// echo $user2;

// echo '</pre>';

$user->setName('abdo ');
echo $user->update();
 $user2->delete();
 echo'gfgfgf';
 $user2->create();

// echo '<pre>';
// // var_dump($user);
// // echo $user->readr();
// // echo $user2;

// echo '</pre>';