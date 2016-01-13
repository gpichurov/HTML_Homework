<?php

// Задача 15: Да се състави програма, която да изчисли сумата на всички
// числа от 1 до въведено число N.
// Пример: 5
// Изход: 15
// Използвайте цикъл do-while.

require_once 'readline.php';

$n = readline('Въведете число N: ', PHP_EOL);

$sum = 0;
$min = min($n, 1);
$max = max($n, 1);

do {
	$sum += $min;
	$min++;
} while ($min <= $max);

echo $sum;