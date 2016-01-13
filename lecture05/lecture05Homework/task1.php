<?php

// Задача 1:
// Да се прочете масив и да се намери най-малкото число кратно на
// 3 от масива.

require_once 'readline.php';

$array = [];
$array2 = [];
$min = 'Няма число кратно на 3.';

do {
	$element = readline('Въведете елемент ' . count($array) . ' от масива: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');

foreach ($array as $value) {
	if ($value % 3 == 0) {
		$array2[] = $value;
		$min = min($array2);
	}
}

echo 'Най-малкото число кратно на 3 е ', $min;
