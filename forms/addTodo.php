<?php

include('../classes/Db.php');
include('../classes/Todo.php');
include('../db/config.php');

    $text = $_POST['text'];
    DB::add($text);

    header('Location: ' . $_SERVER['HTTP_REFERER']);

    // creer un nouveau Todo
    // $todo = new Todo($text, false);

    // recuperer les todos existants
    // $todos = DB::readData();
    

    //$todo1 = new Todo($text,false);

    //$todo2 = BD::writeData();

    //echo $text;


    // writeData($text);

    ?>