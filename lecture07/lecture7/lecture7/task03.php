<?php

require_once 'readline.php';

$index = 'podhodqshta stoinost';

$array = [];

do {
	$input = readline('Enter a number: ');
	if ($input !== ''){
		$array [] = $input;
	}
} while ($input !== '');

$search = readline('enter what you search: ');
foreach ($array as $key => $value) {
	if ($value === $search) {
		$index = $key;
		break;
	}
}

echo $index;