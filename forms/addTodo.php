<?php

include('../classes/Db.php');
include('../classes/Todo.php');
include('../db/config.php');

$text = $_POST['text'];
$text = htmlspecialchars($text);
DB::add($text);

header('Location: ' . $_SERVER['HTTP_REFERER']);


?>