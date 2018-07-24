<?php 


/**
* 
*/
class Test
{
	
	const ONE = "Number one"; 
	const TWO = "Number two"; 
}

$obj = new ReflectionClass("Test");

echo $obj->getconstant("ONE"). "\n"; 
echo $obj->getconstant("TWO"). "\n"; 

