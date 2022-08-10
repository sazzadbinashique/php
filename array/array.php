<?php
/*spl autoload is most popular autoload for php oop*/

spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";

});

 $directed = [
     ['sum_of_length'=>142.12, 'name'=>'chakma'],
     ['sum_of_length'=>12.33, 'name'=>'garo'],
     ['sum_of_length'=>123.42, 'name'=>'marong'],
     ['sum_of_length'=>112.23, 'name'=>'java'],
 ];
$spontaneous = [
    ['sum_of_length'=>12.12, 'name'=>'chakma'],
    ['sum_of_length'=>123.12, 'name'=>'garo'],
    ['sum_of_length'=>123.34, 'name'=>'marong'],
    ['sum_of_length'=>162.44, 'name'=>'java'],
    ['sum_of_length'=>123.3, 'name'=>'bangla'],
];

$output = array_merge_recursive($directed, $spontaneous);
$sum = array_reduce($output, function($result, $item) {
    if (!isset($result[$item['name']])) $result[$item['name']] = 0;
    $result[$item['name']] += $item['sum_of_length'];
    return $result;
}, array());
echo '<pre>';
print_r($sum);
print_r($output);
echo '</pre>';
?>

<a class="btn btn-primary" href="index.php">Go Back</a>