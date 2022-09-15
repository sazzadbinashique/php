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
//solution one
preg_match_all("/([^,= ]+)=([^,= ]+)/", $str, $r);



foreach ($r[2] as $key =>$value){
    if( $key % 2 == 0 ) {
        unset($r[2][$key]);
    }
}
sort($r[2]);
$total= count($r[2]);
foreach (array_unique($r[2] )as $v){
    if ($v> 60){
        echo '<pre>';
        print_r(($v));
        echo '</pre>';
    }

}

//solution two

/*$string = 'key=>value1,key=>value2,key=>value3, key=>value3, key=>value3,key=>value3';
$pairs = explode(',', $string);*/
/*$data = array();
foreach ($pairs as $pair) {
    list($key, $value) = explode('=>', $pair);
    $data[$key] = $value;
}*/
/*echo '<pre>';
print_r(($pairs));
echo '</pre>';*/



?>

<a class="btn btn-primary" href="index.php">Go Back</a>