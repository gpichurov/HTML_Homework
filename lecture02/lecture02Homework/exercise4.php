<?php

// Задача 4:
// Въведете 2 различни числа от конзолата и ги разпечатайте в
// нарастващ ред

require_once 'readline.php';

$a = readline('A:', PHP_EOL);

$b = readline('B:', PHP_EOL);

if ($a > $b){
	echo $b . ' ' . $a;
}
else{
	echo $a . ' ' . $b;
}