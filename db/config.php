<?php

function connect() {
    // config
    $user = 'root';
    $password = 'losangeles';
    $host = 'localhost' ;
    $database = 'todolist';
    // connection
    $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    return $bdd;
}
?>