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
        $request->execute(['id'=>$id]);
        $text = $request->fetchAll();
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

}

?>