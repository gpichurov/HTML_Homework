<?php

require_once 'readline.php';

$array = [];

do {
	$input = readline('Enter positive number: ');
	if ($input !== ''){
		$array [] = $input;
	}
} while ($input !== '');

print_r($array);

$counter = 0;

foreach ($array as $value) {
	if ($value < 0) {
		$counter++;
	}
}

echo $counter > 0 ? 'There are negative numbers in the array' : 'There are not negative numbers in the array';