<?php

class DB {

    static function add($text){
        $bdd = connect();
        $request = $bdd->prepare("INSERT INTO todolist VALUES(NULL, :text, 0)");
        $request->execute(['text'=>$text]);
        $text = $request->fetchAll();
    }

    static function delete($id){
        $bdd = connect();
        $request = $bdd->prepare('DELETE FROM todolist WHERE id=:id');
        $request->execute(['id'=>$id]);
        $text = $request->fetchAll();
    }
// ajout done en INT
    static function update($id,$text){
        $bdd = connect();
        $request = $bdd->prepare('UPDATE todolist SET text=:text WHERE id=:id');
        $request->execute(['text'=>$text,'id'=>$id]);
        $text = $request->fetchAll();
    }

}

?>