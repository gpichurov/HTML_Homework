<?php

// Задача 9:
// Напишете програма, в която потребителя въвежда масив, след което
// елементите на масива се обръщат в обратен ред (Целта не е масива да
// се отпечата в обратен ред, ами първо да се обърне, след което да се
// отпечата в нормален ред). Пробвайте да решите задачата първо с един
// допълнителен масив и после без да използвате друг масив.

require_once 'readline.php';

$array = [];
$arrayMirror = [];

do {
	$element = readline('Enter element ' . count($array) . ' of the array: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');


for ($i = count($array) - 1; $i >= 0; $i--) {
	$arrayMirror[] = $array[$i];
}

print_r($arrayMirror); // с допълнителен масив



for ($j = 0; $j < floor(count($array) / 2); $j++) {
	$temp = $array[$j];
	$array[$j] = $array[count($array) - $j -1];
	$array[count($array) - $j -1] = $temp;
}

print_r($array);  // без допълнителен масив
