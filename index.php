<?php
require './classes/User.php';
// Connexion::connect();

// if(Connexion :: $conn!==null){
//     echo 'rerer';
//   }

$user= new User('name','email','tele');
$user->create();

echo '<pre>';
var_dump($user);
echo '</pre>';
