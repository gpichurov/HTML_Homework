<?php

// Задача 13:
// Да се състави програма, чрез която се въвежда число и се представя
// като число в двоична бройна система.
// Програмата, чрез масив, да изчислява последователно всички цифри
// на въведеното естествено число в 2-ична бройна система.
// Пример: 99
// Изход: 1100011

require_once 'readline.php';

$n = readline('Въведете естествено число: ');
$number = $n;
$arrayN = [];
$arrayNum = [];
$arrayAllNum = [];

do {
	$arrayN[] = $number % 2;
	$number = floor($number / 2);
} while ($number > 0);

for ($j = 0; $j < floor(count($arrayN) / 2); $j++) {
	$temp = $arrayN[$j];
	$arrayN[$j] = $arrayN[count($arrayN) - $j -1];
	$arrayN[count($arrayN) - $j -1] = $temp;
}

echo 'Числото в двуична бройна система: ', implode($arrayN), PHP_EOL;

for ($i = strlen($n); $i > 0 ; $i--) {
	$num = ($n % pow(10, $i)) / pow(10, $i - 1);
	
	do {
		$arrayNum[] = $num % 2;
		$num = floor($num / 2);
	} while ($num > 0);
	
	for ($k = 0; $k < floor(count($arrayNum) / 2); $k++) {
		$temp = $arrayNum[$k];
		$arrayNum[$k] = $arrayNum[count($arrayNum) - $k -1];
		$arrayNum[count($arrayNum) - $k -1] = $temp;
	}
	
	$arrayAllNum [] = implode($arrayNum);
	$arrayNum = [];
}
echo 'Цифрите на числото в двуична бройна система: ', implode(' ', $arrayAllNum);