<?php

require_once 'readline.php';

$number = readline('Enter a number', ' ' , PHP_EOL);

if ($number >= 10 && $number <= 30000) {

	$currentNumber = $number;
	$reversed = 0;
	do {

		$reversed *= 10;
		$reversed += $currentNumber % 10;
		$currentNumber = floor($currentNumber / 10);

	} while ($currentNumber > 0);

	if ($number == $reversed) {
		echo 'This number is palindrome';
	} else {
		echo 'It \'s not a palindrome number';
	}
} else {
	echo 'Enter a number between 10 and 30000';
}