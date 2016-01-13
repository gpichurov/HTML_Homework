<?php

// Задача 5:
// Да се състави програма, чрез която се въвежда естествено число N.
// Програмата да извежда число, чиито цифри са написани в ред обратен
// на въведеното число.
// Да се извежда съобщение дали въведеното число е палиндром.
// Пример: 12321
// Изход: 12321 да.
// Пример: 12578
// Изход: 87521 не.

require_once 'readline.php';

do {
	$n = readline('Въведете естественo числo: ');
} while ($n < 1);

$len = strlen($n);
$newNum = '';

function num($n, $len, $newNum) {
	if ($len == 0){
		if ($n === $newNum) {
			return $newNum . ' да.';
		} else {
			return $newNum . ' не.';
		}	
	}
	$newNum = $newNum . $n{$len - 1}; 
	return num($n, $len - 1, $newNum);
}

echo num($n, $len, $newNum);