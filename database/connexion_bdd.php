<?php

    $host = 'localhost' ; // host name 
    $username = 'root' ; // admin name
    $password = '' ; // password
    $db_name = 'db_haircut'; // data base name

    $connect_bdd = new mysqli ($host , $username , $password, $db_name); // connect of data base

    // if ($connect_bdd->connect_error){
    //     echo "échec de la connexion";
    // }
    // else {
    //     echo "connexion réussi";
    // }