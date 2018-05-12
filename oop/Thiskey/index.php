<!DOCTYPE html>
<html>
<head>
    <title>This keyword</title>
</head>
<body>
<?php
    class Car {

    // The properties
    public $company;
    public $color = 'beige';
    public $hasSunRoof = true;
 
    // The method can now approach the class properties
    // with the $this keyword
    public function hello()
    {
      return "Beep I am a <i>" . $this -> comp . "</i>, and I am <i>" .
        $this -> color;
    }
}

$bmw = new Car();
$mercedes = new Car();


$bmw-> company = "BMW";
$bmw-> color = "Blue";


$mercedes-> company = "MERCEDES";
$mercedes-> color = "Blue";


echo $bmw-> hello();
echo "<hr>";
echo $mercedes-> hello();
?>

</body>
</html>