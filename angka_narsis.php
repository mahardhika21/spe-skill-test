<?php 

function narcissistic($input) {
	$val = $input;
	$sum = 0;
	$total = strlen($input); 
		
	while($input != 0) {
			$e = $input % 10; 
			$sum = $sum+pow($e, $total);
			$input = floor($input/10); 
	}

	return $val === $sum ? true : false; 
}

 $n = 153;
 echo narcissistic($n);

?>