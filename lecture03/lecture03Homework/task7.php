<?php

// Задача 7: Започвайки от 3, да се изведат на екрана първите n
// числа които се делят на 3. Числата да са разделени със запетая.

require_once 'readline.php';

$n = readline('Брой числа: ', PHP_EOL);

if ($n > 0) {
	echo 3;
}

$counter = 2;

while ($counter <= $n) {
	echo ', ' . 3 * $counter;
	$counter++;
}