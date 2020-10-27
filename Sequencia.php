<?php 

class Sequencia
{
	private $array;

	public function __construct($start, $end){
		for($i = $start; $i <= $end; $i++){
			$this->array[] =  $i;
		}
	}

	public function multiplo($numero, $output){
		for($i = $numero-1; $i <= 100; $i+=$numero){
			$this->array[$i] =  $output;
		}
	}

	public function getArray(){
		return $this->array;
	}

	public function printArray(){
		foreach($this->array as $el){
			echo $el ;
			echo "<br>";
		}
	}
}