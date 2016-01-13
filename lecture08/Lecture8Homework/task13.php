<?php

// Задача 13:
// Да се създаде метод, който приема два масива от числа и връща
// масив, съдържащ всички елементи на подадените масиви, като в
// първата част на масива са елементите на първия подаден масив,
// а във втората част – тези на втория подаден масив.

$array1 = [0, 1, 2, 3, 4];
$array2 = [5, 6, 7, 8, 9];

function arrayMerge($array1, $array2) {
	for ($i = 0; $i < count($array1); $i++) {
		$arrayNew [] = $array1[$i];
	}
	for ($j = 0; $j < count($array2); $j++) {
		$arrayNew [] = $array2[$j];
	}
	return $arrayNew;
}

print_r(arrayMerge($array1, $array2));