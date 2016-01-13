<?php

// Задача 15:
// Да се състави програма, която въвежда в едномерен масив реални числа.
// Като изход: програма извежда онези 3 различни числа, чиято
// абсолютна стойност формира максималната обща сума.
// Пример: 7.13; 0.2; 4.9; 5.1; 6.34; 1.12
// Изход: 5.1; 6.34; 7.13

require_once 'readline.php';

$array = [];
$array2 = [];

do {
	$element = readline('Въведете елемент ' . count($array) . ' от масива: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');

for ($i = 0; $i < 3; $i++) {
	$array2[$i] = max($array);
	foreach ($array as $key => $value) {
		if ($value === max($array)) {
			unset($array[$key]);
			break;
		}
	}
}

echo implode('; ', $array2);
