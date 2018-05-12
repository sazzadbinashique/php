<!DOCTYPE html>
<html>
<head>
	<title>Example of class method and object </title>
</head>
<body>
<?php
	/**
	* declare the name Class 
	*/
	class User
	{
		/**
		* declare the propertice 
		*/ 

		public $firstName = "Sazzad";
		public $midName = "Bin";
		public $LastName = "Ashique";
		

		// Declare the method name 

		public function hello()
		{
			return "Hello";
		}
	}


$user1 = new User(); 

$user1-> firstName = "Sazzad";
$user1-> midName = "Bin";
$user1-> lastName = "Ashique";

$hello = $user1-> hello();

$user2 = new User(); 

$user2-> firstName = "Shaila";
$user2-> midName = "Shams";
$user2-> lastName = "Sumi";

echo $hello. ", " . $user1-> firstName . " " . $user1-> midName . " " . $user1-> lastName;
echo "<br>";
echo $hello. ", " . $user2-> firstName . " " . $user2-> midName . " " . $user2-> lastName;


?> 

</body>
</html>