<?php

// Задача 10:
// Да се състави програма, чрез която се въвеждат 7 цели числа в
// едномерен масив.
// Програмата да изведе числото, което е най-близко до средната
// стойност на въведените числа.
// Пример: 1,2,3,4,5,6,7
// Изход: средна стойност 4, най-близка стойност 4

require_once 'readline.php';

$array = [];

do {
	$array[] = readline('Въведете елемент ' . count($array) . ' от масива: ' . PHP_EOL);
} while (count($array) < 7);

$average = array_sum($array) / count($array);

$array2 = [];

for ($i = 0; $i < count($array); $i++) {
	$diff = abs($array[$i] - $average);
	$array2[] = $diff;
}

foreach ($array2 as $key => $value) {
	if ($value === min($array2)) {
		$close = $array[$key];
		break;
	}
}
echo 'Средна стойност: ' . $average . ', най-близка стойност: ' . $close. '.';


