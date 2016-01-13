<?php

// Задача 2:
// Имате квадратен двумерен масив от естествени числа, чийто стойности
// се въвеждат от конзолата. Да се отпечатат диагоналите на масива.
// Пример:
// 1,4,6,3
// 5,9,7,2
// 4,8,1,9
// 2,3,4,5
// Изход:
// 1 9 1 5
// 3 7 8 2

require_once 'readline.php';

$array = [];
$read = true;

while ($read) {
	$row = count($array);
	$array[$row] = array();
	do {
		$rowLen = count($array[$row]);
		$input = readline('Въведете елемент [' . $row . '][' . $rowLen . ']');

		if ($input === '.') {
			break 2;
		}

		if ($input !== '') {
			$array[$row][] = $input;
		}
	} while ($input !== '');
}


for ($i = 0, $j = 0; $i < count($array[0]), $j < count($array[0]); $i++, $j++) {
	echo $array[$i] [$j], ' ';
}
echo PHP_EOL;

for ($i = count($array[0]) - 1, $j = 0; $i >= 0, $j < count($array[0]); $i--, $j++) {
	echo $array[$j] [$i], ' ';
}
