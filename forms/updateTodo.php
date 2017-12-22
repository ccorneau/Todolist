<?php

include('../classes/Db.php');
include('../classes/Todo.php');
include('../db/config.php');

$id = $_POST['idtodo'];
$text = $_POST['text'];

DB::update($id,$text);

header('Location: ' . $_SERVER['HTTP_REFERER']);


?>