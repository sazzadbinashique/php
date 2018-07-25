<?php 

/*
 $arr = array( 'a'=> 1, 'b'=> 2, 'c'=> 3, 'd'=> 4, 'e'=> 5, 'f'=> 6); 

 echo json_encode($arr);


class Employee{
	public $name = "";
	public $hobbies = "";
	public $birthday = "";
}

 $e = new Employee();

 $e-> name= "Sazzad Bin Ashique"; 
 $e-> hobbies= "Blogging"; 
 // $e-> birthday= date('m/d/Y h:i:s a', "10/12/1990 12:20:03 p");
 $e-> birthday= date('m/d/Y h:i:s a', strtotime("10/12/1990 12:20:03"));


echo json_encode($e);
*/

 $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

   var_dump(json_decode($json));
   var_dump(json_decode($json, true));

 ?>