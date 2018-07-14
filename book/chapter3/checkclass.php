<?php

	/**
	* This is a checking the type of class 
	*/
	class ParentClass 
	{
		public function getClass(){
			echo get_class();// using "no $this"
		}
		
	}

	
		class ChildClass extends ParentClass
		{
			
			
		}

		//$cc = new ChildClass();
		$object = new ChildClass();
		$object-> getClass(); // outpust "ParentClass"
		/**
		if (is_a($cc, "ChildClass")) {
			echo "It's a ChildClass type object. ";
			
		}
		echo "\n";

		if (is_a($cc, "ParentClass")) {
			echo "It's also a ParentClass type object";
		}
		**/
		//echo  get_class($cc);


?>