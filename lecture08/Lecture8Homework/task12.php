<?php

// Задача 12:
// Да се създаде метод, който приема за входни данни число N и
// връща масив от числа с дължина N, който съдържа всички числа от 1 до N.

require_once 'readline.php';

do {
	$n = readline('Въведете естественo числo: ');
} while ($n < 1);

function nArray($n) {
	
	for ($i = 1; $i <= $n; $i++) {
		$array [] = $i;
	}	
	
	return $array;
}

print_r(nArray($n));