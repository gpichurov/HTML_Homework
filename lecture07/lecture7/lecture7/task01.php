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

$hasNegatives = false;

foreach ($array as $value) {
	if ($value < 0) {
		$hasNegatives = true;
		break;
	}
}

echo $hasNegatives ? 'There are negative numbers in the array' : 'There are not negative numbers in the array';