<?php

/**
 *1) Recursive relation
 * 
 * n ^ m = n * n ^ m -1
 * n * m = n + n * (m - 1);
 * 2) Bottom
 * m == 1 -> n 
 * m == 1 -> n
 * 3) Step 
 * 	-1
 */
 
function power($n, $m) {
	
	if ($m < 0) {
		return 0;
	}
	
	if ($m == 0) {
		return 1;
	}
	
	if ($m == 1) {
		return $n;
	}
	
	return multiply(power($n, $m - 1), $n);
}

function multiply($n, $m) {
	
	if ($m == 1) {
		return $n;
	}
	
	return $n + multiply($n, $m - 1);
}

echo power(9, 4);

