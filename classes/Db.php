<?php

class DB {
    // Pour écrire les données sérialisées dans le fichier database.txt
    static function writeData($data, $filename = "../db/todos.txt") {
        $data = serialize($data);
        file_put_contents($filename, $data);
    }

    // pour lire les données stockées dans le fichier "database.txt"
    // retourne False quand il n'y a pas de données
    static function readData($filename = "../db/todos.txt") {
        $data = file_get_contents($filename);
        $data = unserialize($data);
        //$todos[] = $newtodo;
        return $data;
    }
}

?>