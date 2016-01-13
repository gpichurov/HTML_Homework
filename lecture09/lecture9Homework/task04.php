<?php

// Задача 4:
// Да се състави програма, чрез която по въведени начална и крайна
// цифра се извеждат на всеки нов ред следната последователност
// (триъгълник от знаци):
// Пример: 1, 9
// Изход:
// 1
// 1 2
// 1 2 3
// ... до
// 1 2 3 4 5 6 7 8 9

require_once 'readline.php';

do {
	$n = readline('Въведете начално число: ');
} while ($n < 1);

do {
	$m = readline('Въведете крайно числo: ');
} while ($m < 1);

function row($n, $m) {
	if ($n - 1 == $m) {
		return;
	}

	echo $n, ' ';
	return row($n + 1, $m);
}

function tri($n, $m, $l) {
	if ($n - 1 == $m) {
		return;
	}
	row($l, $n);
	echo PHP_EOL;
	return tri($n + 1, $m, $l);
}

tri($n, $m, $n);