<?php

// Задача 5:
// Да се реши горната задача като се създаде рекурсивна функция, която
// да връща търсения масив като резултат.

$array = array(1, 3, 5, 7, 9, 11, 45);
$n = 6;
$len = count($array);
$cnt = $len;

function add($array, $n, $len, $cnt) {
	
	if ($cnt == 0) {
		return array_splice($array, $len - $cnt, 0, $n);
	}
	
	if ($n < $array[$len - $cnt]) {
		array_splice($array, $len - $cnt, 0, $n);
		return $array;
	}
	
	return add($array, $n, $len, $cnt - 1);
}

print_r(add($array, $n, $len, $cnt));