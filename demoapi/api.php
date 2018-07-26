<?php 

// echo " Learn REst api";

header('content_type: application/json');

$request = $_SERVER['REQUEST_METHOD'];

switch ($request) {
	case 'GET':
		 echo '{"name": "Get ... Rest Api"}';
		break;
	case 'PUT':
		echo '{"name": "Put ... Rest Api"}';
		break;
	case 'POST':
		echo '{"name": "Post ... Rest Api"}';
		break;

	case 'DELETE':
		echo '{"name": "Delete ... Rest Api"}';
		break;
	default:
		# code...
		break;
}

?>