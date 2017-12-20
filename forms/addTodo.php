<?php

include('../classes/Db.php');
include('../classes/Todo.php');
    $text = $_POST['text'];

    // creer un nouveau Todo
    $todo = new Todo($text, false);

    // recuperer les todos existants
    $todos = DB::readData();

    echo $text;


    // writeData($text);

    ?>