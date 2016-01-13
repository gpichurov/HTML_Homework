<?php

// Задача 14:
// Да се състави метод, който приема за стойност число
// N и връща стойността на N! (N факториел).

require_once 'readline.php';

do {
	$n = readline('Въведете положително число числo: ');
} while ($n < 0);

function nFac($n) {
	if ($n == 0) {
		return 1;
	}
	return $n * nFac($n - 1);
}

echo nFac($n);