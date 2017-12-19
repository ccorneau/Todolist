<?php


class Todo
{
	private $text;
	private $done;
	private $id;
	
	function __construct($text,$done, $id = ''){
		$this->setText($text);
		$this->setDone($done);

		// Test si l'id est vide
		if (empty($id)) {
			$this->id = uniqid();	
		} else {
			$this->id = $id;
		}	
	}

	public function getText(){
		return $this->text;
	}

	public function setText($value){
		$this->text = $value;
	}

	public function getDone(){
		return $this->done;
	}

	public function setDone($value){
		$this->done = $value;
	}

	public function getId() {
		return $this->id;
	}
	

	public function save() {
		
	}

	/*public function delete (&$arrayTodo){
		$db = new Db();
	}*/

	public function delete (&$arrayTodo) {
        // Suppression de la todo = id dans le tableau
        foreach ($arrayTodo as $key => $todo) {
            if ($todo->getId() == $this->id) {
                unset($arrayTodo[$key]);
            }
        }
    }

}

?>