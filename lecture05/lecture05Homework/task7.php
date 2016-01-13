<?php

// Задача 7:
// Напишете програма, която първо чете масив и после създава нов
// масив със същия размер по следния начин: стойността на всеки
// елемент от втория масив да е равна на сбора от предходния и
// следващият елемент на съответния елемент от първия масив.
// Да се изведе получения масив.

require_once 'readline.php';

$array = [];
$arrayNew = [];

do {
	$element = readline('Въведете елемент ' . count($array) . ' от масива: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');

for ($i = 0; $i < count($array); $i++) {
	if (!isset($array[$i - 1])) {
		$arrayNew[] = $array[$i + 1];
	}
	if (!isset($array[$i + 1])) {
		$arrayNew[] = $array[$i - 1];
	}
	if (isset($array[$i - 1]) && isset($array[$i + 1])) {
		$arrayNew[] = $array[$i - 1] + $array [$i + 1];
	}
}

print_r($arrayNew);