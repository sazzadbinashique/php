<?php 
	$marks = 95 ; 

	if ($marks <= 40) {
		echo "you Failed";
	}elseif ($marks<= 59 && $marks >= 41) {
		echo "Second Division";
	}elseif ($marks<=74 && $marks >= 60) {
		echo "First Division";
	}elseif ($marks<= 75 && $marks>= 79 ) {
		echo "Distinction";
	}elseif ($marks <= 80 && $marks>= 89) {
		echo "Great Marks";
	}elseif ($marks<= 94 && $marks>= 90 ) {
		echo "Excellent Marks";
	}elseif ($marks <= 100 && $marks>= 95) {
		echo "Outstnading Marks";
	}

?>