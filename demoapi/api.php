<?php 

// include_once('db.php');

header('content_type: application/json');

$request = $_SERVER['REQUEST_METHOD'];

switch ($request) {
	case 'GET':
		 getMethod();
		break;
	case 'PUT':
		echo '{"name": "Put ... Rest Api"}';
		break;
	case 'POST':
		$data = json_decode(file_get_contents('php://input'),ture);
		postMethod($data);
		break;

	case 'DELETE':
		echo '{"name": "Delete ... Rest Api"}';
		break;
	default:
		# code...
		break;
}

function getMethod(){
	 include('db.php');

	$sql = "SELECT * FROM user";
	$result= mysqli_query($conn, $sql); 

	if (mysqli_num_rows($result)> 0) {
		$rows = array();

		while ($r = mysqli_fetch_assoc($result)) {
			$rows["result"] [] = $r ; 
		}
		echo json_encode($rows);
	}else{

		echo '{"result": "Data not found"}';
	}


}


function postMethod($data){
include('db.php');

$name = $data["name"];
$age = $data["age"];
$email=$data["email"];

$sql = "INSERT INTO user ( name, age, email, created_at) VALUES ('$name', '$age', '$email', NOW())";

if (mysqli_query($conn,$sql)) {
	echo '{"result": "data inserted"}';
}else {
	echo '{"result": "data not inserted"}';
}

}


?>