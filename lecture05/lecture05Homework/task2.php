<?php

// Задача 2:
// Нека по въведен масив да се конструира нов, като половината му
// елементи са точно като на оригиналния, а другите да са тези
// елементи, но в обратен ред. Последно, да се изведе новия масив
// на екрана.

require_once 'readline.php';

$array = [];
$arrayMirror = [];

do {
	$element = readline('Въведете елемент ' . count($array) . ' от масива: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');

for ($i = count($array) - 1; $i >= 0; $i--) {
	$arrayMirror[] = $array[$i];
}

$arrayNew = array_merge($array, $arrayMirror);
print_r($arrayNew);