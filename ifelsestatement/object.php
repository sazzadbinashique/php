<?php
	// class definition 
class greeting{
	// properties 
	public $str = "Hello Sazzad Bin Ashique";

	// method 
	function show_greeting(){
		return $this->str;
	}


}
	// create object from class 
	$message = new greeting;
	var_dump($message);

?>