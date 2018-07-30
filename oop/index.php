<?php 
// require 'animal.php';
include'animal.php');
include('cow.php');
include('lion.php');
// require 'cow.php';
// require 'lion.php';

$cow = new Cow( 'Indian', 'Bangladeshi');
// $lion = new Lion( 'Canival', 'Bangladeshi');

var_dump($cow);
echo "string";
// echo '<b> Cow Object</b></br>';

// echo 'This Cow belong to the ' . $cow->get_family() . 'Family and eats ' . $cow->get_food() . '<br><br>';
// echo 'This Lion belong to the ' . $lion->get_family() . 'Family and eats ' . $cow->get_food() . '<br><br>';