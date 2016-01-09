<?php

require_once 'readline.php';

$array = [];

do {
	$input = readline('Enter a number: ');
	if ($input !== ''){
		$array [] = $input;
	}
} while ($input !== '');

print_r($array);

$result = true;

for ($i = 1; $i < count($array) - 1; $i++) {
	if (!(($array[$i] > $array[$i + 1] && $array[$i] > $array[$i - 1]) ||
			($array[$i] < $array[$i + 1] && $array[$i] < $array[$i - 1]))) {
		$result = false;
		break;
	}
}

echo $result ? 'Íàçúáåí å.' : 'Íå å íàçúáåí.';