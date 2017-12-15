<?php


class Todo
{
	private $text;
	private $done;

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

	function __construct($text,$done){
		$this->setText($text);
		$this->setDone($done);
	}
}

?>