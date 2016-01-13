<?php

// 		Задача 6:
// Въведете 3 числа от конзолата - а1, а2 и а3. Разменете стойностите им
// така, че а1 да има стойността на а2, а2 да има стойността на а3, а а3
// да има старата стойност на а1.

require_once 'readline.php';

$a1 = readline('A1:', PHP_EOL);

$a2 = readline('A2:', PHP_EOL);

$a3 = readline('A3:', PHP_EOL);

$new = $a1;

$a1 = $a2;

$a2 = $a3;

$a3 = $new;

echo "a1 = $a1", PHP_EOL;

echo "a2 = $a2", PHP_EOL;

echo "a3 = $a3", PHP_EOL;