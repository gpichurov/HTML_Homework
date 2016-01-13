<?php

// Задача 6: Да се прочете число от екрана(конзолата) и да се
// изведе сбора на всички числа между 1 и въведеното число.

require_once 'readline.php';

$n = readline('Въведете число: ', PHP_EOL);

$sum = 0;
$min = min($n, 1);
$max = max($n, 1);

while ($min <= $max) {
	$sum += $min;
	$min++;
}
echo " Резултата е $sum";