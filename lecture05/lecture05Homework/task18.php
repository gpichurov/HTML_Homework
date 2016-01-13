<?php

// Задача 18:
// Дадени са два едномерни масива с естествени числа.
// Да се състави програма, която сравнява всички числа с еднакви
// индекси от двата масива и записва в трети масив, по-голямото от
// двете числа.
// Да се изведе съдържанието и на трите масива
// Пример:
// 18,19,32,1,3, 4, 5, 6, 7, 8
// 1, 2, 3,4,5,16,17,18,27,11
// Изход:
// 18,19,32 ,4,5,16,17,18,27,11

require_once 'readline.php';

$array1 = [];
$array2 = [];
$array3 = [];

do {
	$element1 = readline('Въведете елемент ' . count($array1) . ' от първия масив: ' . PHP_EOL);
	if ($element1 !== '') {
		$array1[] = $element1;
	}
} while ($element1 !== '');

do {
	$array2[] = readline('Въведете елемент ' . count($array2) . ' от втория масив: ' . PHP_EOL);
} while (count($array2) < count($array1));

for ($i = 0; $i < count($array1); $i++) {
	$array3[] = max($array1[$i], $array2[$i]);
}

echo implode(', ', $array1), PHP_EOL;
echo implode(', ', $array2), PHP_EOL;
echo implode(', ', $array3);