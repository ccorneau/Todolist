<?php

include('../classes/Db.php');
include('../classes/Todo.php');
include('../db/config.php');

$id = $_POST['idtodo'];
DB::delete($id);

header('Location: ' . $_SERVER['HTTP_REFERER']);


?>