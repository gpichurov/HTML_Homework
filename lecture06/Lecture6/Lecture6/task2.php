<?php

require_once 'readline.php';

$array = [];
$index = 0;
$result = 'Íàçúáåí å';

do {
	$input = readline('Enter element ' . count($array) . ' of the array: ' . PHP_EOL);
	if ($input !== '') {
		$array[$index] = $input;
		$index++;
	}
} while ($input !== '');

for ($i= 0; $i < $index; $i++){
	if (($i % 2 == 0) && ($array[$i] > $array[$i + 1]) || (($i % 2 != 0) && ($array[$i] < $array[$i + 1]))) {
		$result = 'Íå å íàçúáåí';
		break;
	}
}

echo $result;