<?php

// Задача 11:
// Да се състави програма, която въвежда от клавиатурата 7 цели числа
// в едномерен масив
// Програмата да изведе всички числа кратни на 5, но по големи от 5.
// Пример: -23, -55, 17, 75, 56, 105, 134
// Изход: 75,105 2 числа

require_once 'readline.php';

$array = [];
$array2 = [];

do {
	$array[] = readline('Въведете елемент ' . count($array) . ' от масива: ' . PHP_EOL);
} while (count($array) < 7);

for ($i = 0; $i < count($array); $i++) {
	if (($array[$i] % 5 == 0) && ($array[$i] > 5)) {
		$array2[] = $array[$i];
	}
}

$result = implode(', ', $array2);

if (count($array2) == 1){
	echo $result . ' ' . count($array2) . ' число';
} else {
	echo $result . ' ' . count($array2) . ' числа';
}