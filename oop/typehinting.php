<?php 
/*spl autoload is most popular autolad for php oop*/

spl_autoload_register(function($class_name){

	include "classes/".$class_name.".php";


});

/*
$cal = new Calculation;
$nums = array(

	array('Number One', 10, 10),
	array('Number Two', 20, 20)
);

$cal->getNumber($nums)
*/



 // $php = new Php;

 new Java(new Php);



 ?>

 <a class="btn btn-primary" href="index.php">Go Back</a>