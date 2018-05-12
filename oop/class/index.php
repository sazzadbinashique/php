<!DOCTYPE html>
<html>
<head>
	<title>PHP-> Sazzad Bin Ashique</title>
</head>
<body>
	
<?php 
// Declare the class name 

class Car {

// propertise 
	public $comp; 
	public $color = 'red';
	public $hasSunRoof = true; 

//method that says hello  
	public function hello(){
		return "beep";
	}
}

// create instance 

$bmw = new Car();
$mercedes = new Car();


// Get the value 
echo $bmw-> color; 
echo "<br/>";
echo $mercedes-> color;
echo "<hr>";

// set value 

$bmw -> color = 'blue';
$bmw -> comp = "bmw";
$mercedes-> comp = "mercedes";


// Get value again 

echo $bmw-> color;
echo "<br>";
echo $mercedes-> color;
echo "<br>";
echo $bmw-> comp;
echo "<br>";
echo $mercedes-> comp;
echo "<hr>";


echo $bmw -> hello();
echo "<br>";
echo $mercedes -> hello();
?>

</body>
</html>