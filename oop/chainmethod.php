<?php 
/*spl autoload is most popular autolad for php oop*/

spl_autoload_register(function($class_name){

	include "classes/".$class_name.".php";


});


/*masic method and php 5 autoload */

/*function __autoload($class_name){

	include "classes/".$class_name.".php";
}
*/

$cal = new Calculation; 

echo "The result is :". $cal->getValue(4,5)->getResult();


 ?>
<br>
 <a class="btn btn-primary" href="index.php">Go Back</a>