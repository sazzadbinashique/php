<!DOCTYPE html>
<html>
<head>
	<title>cahgnge method and properties</title>
</head>
<body>

<?php 
/**
* Declare classs name 
*/
class User 
{
	public $firstName; 

	

	Public function hello()
	{
		echo "Hello , " . $this-> firstName ;

		return $this ;
	}


	public function register()
	{
		echo ">> Registered";

		return $this ;
	}

	public function email()
	{
		echo ">> Sent email";

		 return $this ; 
	}
}

$user1 = new User();
$user1 -> firstName = "Sazzad";

$user1 -> hello()-> register()-> email();


	
?> 

</body>
</html>