<?php

// Задача 3:
// Да се състави програма, която проверява дали въведено естествено
// число е просто.
// Пример: 101
// Изход: просто

require_once 'readline.php';

do {
	$n = readline('Въведете естественo числo: ');
} while ($n < 1);
	
function simple($n, $m = 2){
	if ($m >= $n){
		return 'просто';
	}
	if ($n % $m == 0){
		return 'не е просто';
	}
	return simple($n, $m + 1);
}

echo simple($n);