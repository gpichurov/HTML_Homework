<?php

// Задача 5: Да се въведат от потребителя 2 числа. И да се изведат
// на екрана всички числа от по-малкото до по-голямото.

require_once 'readline.php';

$n = readline('Въведете първото число: ', PHP_EOL);
$m = readline('Въведете второто число: ', PHP_EOL);

$min = min($n, $m);
$max = max($n, $m);

while ($min <= $max) {
	echo "$min ";
	$min++;
}