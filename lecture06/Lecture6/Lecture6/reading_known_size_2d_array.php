<?php

require_once 'readline.php';
//3x3 array

$rows = 3;
$cols = 3;
$array = [];

for ($row = 0; $row < $rows; $row++) {
	$array[$row] = [];
	
	for ($col = 0; $col < $cols; $col++) {
		$array[$row] = readline('Enter element [' . $row . '][' . $col . ']' . PHP_EOL);
	}
}

print_r($array);