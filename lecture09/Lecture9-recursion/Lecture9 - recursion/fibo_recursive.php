<?php
$counter = 0;
function fibonacii($n, $first = 0, $second = 1) {
	if ($n == 0) {
		return ;
	}
	
	$fibo = $first + $second;
	if ($first == 0) {
		echo 0, ' ', 1, ' ';
	}
	
	echo $fibo, ' ';	
	
	fibonacii($n - 1, $second, $fibo);
}

fibonacii(6);

//function a($b = 1) { echo $b;}
//a(3);