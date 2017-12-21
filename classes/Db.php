<?php

class DB {

    static function add($text){
        $user = 'root';
        $password = 'losangeles';
        $host = 'localhost' ;
        $database = 'todolist';
        $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
        $request = $bdd->prepare("INSERT INTO todolist VALUES(NULL, :text, 0)");
        $request->execute(['text'=>$text]);
        $text = $request->fetchAll();
    }

    static function delete($id){
        $user = 'root';
        $password = 'losangeles';
        $host = 'localhost' ;
        $database = 'todolist';
        $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
        $request = $bdd->prepare('DELETE FROM todolist WHERE id=:id');
    }

    static function update($id,$text){
        $user = 'root';
        $password = 'losangeles';
        $host = 'localhost' ;
        $database = 'todolist';
        $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
        $request = $bdd->prepare('UPDATE todolist SET text=:text WHERE id=:id');
        $request->execute(['text'=>$text,'id'=>$id]);
        $text = $request->fetchAll();
    }
    // static function writeData($data, $filename = "../db/todos.txt") {
    //     $data = serialize($data);
    //     file_put_contents($filename, $data);
    // }

    
    // static function readData($filename = "../db/todos.txt") {
    //     $data = file_get_contents($filename);
    //     $data = unserialize($data);
    //     //$todos[] = $newtodo;
    //     //array_push($arrayTodo, $todo);
    //     return $data;
    // }
}

?>