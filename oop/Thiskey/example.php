<!DOCTYPE html>
<html>
<head>
	<title>This key Word use</title>
</head>
<body>
<?php
class User {
 
  // The class properties.
  public $firstName;
  public $midName;
  public $lastName;
 
  // A method that says hello to the user $firstName.
  // The user $firstName property can be approached with the $this keyword.
  public function hello()
  {
    return "hello, " .  $this -> firstName . ". Your full Name is "  . $this -> firstName . " " . $this-> midName . " " . $this-> lastName;

  }
}
 
// Create a new object.
$user1 = new User();
 
// Set the user $firstName and $lastName properties.
$user1 -> firstName = "Sazzad";
$user1 -> midName = "Bin";
$user1 -> lastName = "Ashique";
 
// Echo the hello() method.
echo $user1 -> hello();

?>

</body>
</html>