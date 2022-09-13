<?php
/*spl autoload is most popular autoload for php oop*/

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";

});

$array1= array('0'=>'z1', '1'=>'Z10', '2'=>'z12', '3'=>'Z2', '4'=>'z3');
print_r($array1);
natcasesort($array1);

echo '<pre>';
echo 'Output:<br>';
print_r($array1);
echo '</pre>';
?>

<a class="btn btn-primary" href="index.php">Go Back</a>