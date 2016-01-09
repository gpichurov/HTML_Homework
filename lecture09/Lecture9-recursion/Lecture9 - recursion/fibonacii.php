<?php


function fibnacii($n) {
	$prev = 0;
	$prev1 = 1;
	
	if ($n >= 1) {
		echo $prev, ' ';
	}
	
	if ($n >= 2) {
		echo $prev1, ' ';
	}
	
	for ($i = 2; $i < $n; $i++) {
		$next = $prev + $prev1;
		
		echo $next, ' ';
		
		$prev = $prev1;
		$prev1 = $next;
	}
	
}

fibnacii(5);