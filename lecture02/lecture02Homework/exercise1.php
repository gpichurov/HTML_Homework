<?php

/*
 * 	Задача 1:
 * Да се поиска от потребителя да въведе 3 числа A, В и С (може да са с 
 * плаваща запетая) от конзолата.
 * Да се изведе подходящо съобщение за това дали C е между A и B.
 */

require_once 'readline.php';

$a = readline('A:', PHP_EOL);

$b = readline('B:', PHP_EOL);

$c = readline('C:', PHP_EOL);

if (($a < $c) && ($b > $c)){
	echo "Числото $c е между $a и $b", PHP_EOL;
}
else{
	echo "Числото $c не е между $a и $b", PHP_EOL;
}