<?php

require_once 'readline.php';

$array = [];
$index = 0;
$result = '�� �� �����������';

do {
	$input = readline('Enter element ' . count($array) . ' of the array: ' . PHP_EOL);
	if ($input !== '') {
		$array[$index] = $input;
		$index++;
	}
} while ($input !== '');

for ($i= 0; $i < $index; $i++){
	if ($array[$i] <  0){
		$result = '��� �����������';
		break;
	}
}

echo $result;