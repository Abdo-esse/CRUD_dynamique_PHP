<?php
require './classes/Connexion.php';
Connexion::connect();

if(Connexion :: $conn!==null){
    echo 'rerer';
  }