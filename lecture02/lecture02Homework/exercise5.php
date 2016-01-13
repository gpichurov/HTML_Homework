<?php

// 		Задача 5:
// Въведете 3 различни числа от конзолата и ги разпечатайте в низходящ ред.

require_once 'readline.php';

$a = readline('A:', PHP_EOL);

$b = readline('B:', PHP_EOL);

$c = readline('C:', PHP_EOL);

if ($a > $b && $b >= $c) {
	echo "$a $b $c";
}
if ($a >= $c && $c > $b) {
	echo "$a $c $b";
}
if ($b > $a && $a >= $c) {
	echo "$b $a $c";
}
if ($b >= $c && $c > $a) {
	echo "$b $c $a";
}
if ($c > $a && $a >= $b) {
	echo "$c $a $b";
}
if ($c >= $b && $b > $a) {
	echo "$c $b $a";
}
if ($a == $b && $a == $c) {
	echo "$c $b $a";
}