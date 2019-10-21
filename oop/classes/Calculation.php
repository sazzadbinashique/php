<?php 

/**
 * 
 */
class Calculation
{
	
	public $a = 0;
	public $b = 0;
	public $result; 

	public function getValue($x , $y)
	{
		$this-> a = $x; 
		$this-> b = $y; 
		return $this; 
	}

	public function getResult(){

		$this-> result = $this-> a * $this-> b ; 
		return $this-> result;  
	}



	public function getNumber( array $x ){

		foreach ($x as $value) {
			echo $value[0];
			echo " : ";
			echo $value[1]* $value[2]."<br>";
		}
	}
}





 ?>