<?php

// Задача 6:
// Напишете програма, която първо чете 2 масива и после извежда
// съобщение дали са еднакви, и дали са с еднакъв размер.

require_once 'readline.php';

$array1 = [];
$array2 = [];
$result1 = 'Масивите са еднакви.';
$result2 = 'Масивите са с еднаква дължина.';

do {
	$element1 = readline('Въведете елемент ' . count($array1) . ' от първия масив: ' . PHP_EOL);
	if ($element1 !== '') {
		$array1[] = $element1;
	}
} while ($element1 !== '');

do {
	$element2 = readline('Въведете елемент ' . count($array2) . ' от втория масив: ' . PHP_EOL);
	if ($element2 !== '') {
		$array2[] = $element2;
	}
} while ($element2 !== '');

if ($array1 !== $array2) {
	$result1 = 'Масивите са различни.';
}

if (count($array1) != count($array2)) {
	$result2 = 'Масивите са с различна дължина.';
}

echo $result1, PHP_EOL, $result2;