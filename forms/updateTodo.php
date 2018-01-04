<?php

include('../classes/Db.php');
include('../classes/Todo.php');
include('../db/config.php');

$bdd = connect();
$id = $_POST['idtodo'];
$text = $_POST['text'];
$check = (int) isset($_POST['check']);


// if (!isset($check)) {
    $done = $bdd->prepare("UPDATE todolist SET done=:check WHERE id=:id");
    $done->execute(['id'=>$id, 'check'=>$check]);
    

// }
// else {
//     $bdd->prepare("UPDATE todolist SET 1 WHERE done");
// }

// DB::update($id,$text);
DB::update($id,$text,$done);

header('Location: ' . $_SERVER['HTTP_REFERER']);


?>