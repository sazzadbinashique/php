<?php 

/*
 class methods

*/

class Mobile{


function Huawei(){


}


function Samsung(){


}

function Nokia(){
	
}

}

$the_methods = get_class_methods('Mobile');

foreach ($the_methods as $method) {
	echo $method . "<br>";
}










 ?>