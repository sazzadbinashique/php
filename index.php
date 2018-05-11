<!DOCTYPE html>
<html>
<head>
	<title>PHP-> Sazzad Bin Ashique</title>
</head>
<body>
	
<?php 
class Car {
	public $comp; 
	public $color = 'red';
	public $hasSunRoof = true; 

	public function hello(){
		return "beep";
	}
}

$bmw = new Car();
$mercedes = new Car();

echo $bmw -> hello();
echo "\n";
echo $mercedes -> hello();
?>

</body>
</html>