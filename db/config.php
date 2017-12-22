<?php

// config
$user = 'root';
$password = 'losangeles';
$host = 'localhost' ;
$database = 'todolist';
// connection
$bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>