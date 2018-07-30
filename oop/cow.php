<?php 



/**
* 
*/
class Cow extends Animal
{
	private $owner; 

	function __construct($family, $food)
	{
		parent::__construct($family, $food); 
	}

	public function set_owener($owner){

		$this->owner = $owner; 
	}

	public function get_owner(){
		return $this->owner; 
	}
}

?>