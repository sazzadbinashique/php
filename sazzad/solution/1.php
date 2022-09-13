<?php
/*spl autoload is most popular autoload for php oop*/

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";

});



$ch = curl_init('http://103.219.147.17/api/json.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);
$str = $data['data'];
preg_match_all("/([^,= ]+)=([^,= ]+)/", $str, $r);


echo '<pre>';
echo 'Output:<br>';
print_r($r);
echo '</pre>';
?>

<a class="btn btn-primary" href="index.php">Go Back</a>