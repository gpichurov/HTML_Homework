<?php

require_once 'readline.php';

$array = [];

do {
	$input = readline('Enter element ' . count($array) . ' of the array: ' . PHP_EOL);
	if ($input !== '') {
		$array[] = $input;
	}
} while ($input !== '');