<?php

require_once 'readline.php';

$array = [];
$index = 0;

do {
	$input = readline('Enter element ' . count($array) . ' of the array: ' . PHP_EOL);
	if (($input !== '') && (($input === 0) || ($input === 1))) {
		$array[$index] = $input;
		$index++;
	}
} while ($input !== '');

for ($i = 0; $i < $index; $i++){
	if ($array[$i] )
}