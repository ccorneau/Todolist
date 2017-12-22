<?php

include('../classes/Db.php');
include('../classes/Todo.php');
include('../db/config.php');

$id = $_POST['idtodo'];
$text = $_POST['text'];
// $check = $_POST['check'];

// if (!isset($check !== 0)) {
//     $bdd->prepare("UPDATE todolist SET 0 WHERE done");
// }
// else {
//     $bdd->prepare("UPDATE todolist SET 1 WHERE done");
// }

DB::update($id,$text);

header('Location: ' . $_SERVER['HTTP_REFERER']);


?>