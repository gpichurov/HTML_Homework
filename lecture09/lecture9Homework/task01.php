<?php

// Задача 1:
// Да се състави програма, която изчислява N-тото число на Фибоначи.
// Първото и второто число на Фибоначи са 1-ци, всяко следващо е равно
// на сбора на предходните 2.
// Пример: 8
// Изход: 21
// Първите 5 числа на Фибоначи са : 1, 1, 2, 3, 5, 8, 13, 21

require_once 'readline.php';

$n = readline('Въведете число: ');

function  fibo($n) {
	if ( $n == 1 ) {
		return 1;
	}
	if ( $n == 2 ) {
		return 1;
	}
	return (fibo($n - 1) + fibo($n - 2));
}

echo fibo($n), PHP_EOL;

function fibos($n, $m = 1) {
	if ($n < $m)  {
		return;
	}
	echo fibo($m), ' ';
	return fibos($n, $m + 1);
}
echo 'Първите ' . $n . ' числа на Фибоначи са : ';
fibos($n);