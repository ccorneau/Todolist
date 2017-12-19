<?php

Class DB{
    private $filename;

    function __construct($filename="todos.txt"){
        $this->filename = $filename;
    }


    public function save ($todo) {
        $arrayTodo = [];
        array_push($arrayTodo, $todo);

    }


  // Pour écrire les données sérialisées dans le fichier database.txt
     function writeData($todo, $filename = "todos.txt") {
      $data = serialize($todo);
      file_put_contents($filename,$todo);
  }


  // pour lire les données stockées dans le fichier "database.txt"
  // retourne False quand il n'y a pas de données
  function readData($filename = "todos.txt") {
      $data = file_get_contents($filename);
      $data = unserialize($todo);
      return $todo;
  }


    /*public function delete ($todo) {
		// Suppression de la todo = id dans le tableau
		foreach ($arrayTodo as $key => $todo) {
			if ($todo->getId() == $todo->id) {
				unset($arrayTodo[$key]);
			}
		}
	}*/
    

}

?>