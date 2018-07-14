<?php 


/**
* 
*/
class users implements ArrayAccess
{
	private $users;
	public function __construct()
	{
		$this->users = array();
	}

	public function offsetExists($key){
		return isset($this->users[$key]);
	}

	public function offsetGet ($key){
		return $this->users[$key];
	}

	public function offsetSet ($key, $value){
		$this->users[$key] = $value;
	}
	public function offsetUnset($key){
		unset($this->users[$key]);
	}
}

$users = new Users();
$users ['arif']="arif@phpexperts.net";
$users ['sazzad']="sazzad@phpexperts.net";
$users ['sumi']="sumi@phpexperts.net";

echo $users['sazzad'];
