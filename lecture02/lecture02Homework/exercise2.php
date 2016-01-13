<?php

// 		Задача 2:
// Въведете 2 различни целочислени числа от конзолата. Запишете
// тяхната сума, разлика, произведение, остатък от деление и
// целочислено деление в отделни променливи и разпечатайте тези
// резултати.

require_once 'readline.php';

$a = readline('A:', PHP_EOL);

$b = readline('B:', PHP_EOL);

echo 'A + B = ' . ($a + $b), PHP_EOL;

echo 'A - B = ' . ($a - $b), PHP_EOL;

echo 'A * B = ' . ($a * $b), PHP_EOL;

echo 'A / B = ' . ($a / $b), PHP_EOL;

echo 'A % B = ' . ($a % $b), PHP_EOL;