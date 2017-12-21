<?php

// config
$user = 'root';
$password = 'losangeles';
$host = 'localhost' ;
$database = 'todolist';
// connection
$bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);

// var_dump($bdd);

// $reponse = $bdd->query('SELECT * FROM utilisateurs WHERE age>10');
// $data = $reponse->fetchAll();
// var_dump($data);

// $request = $bdd->prepare('SELECT * FROM utilisateurs WHERE prenom =:prenom');
// $request->execute(['prenom'=>'Pierre']);
// $prenom = $request->fetchAll();
// var_dump($prenom);

?>