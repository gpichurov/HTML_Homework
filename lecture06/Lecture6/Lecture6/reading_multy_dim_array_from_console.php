<?php

require_once 'readline.php';

$array = [];
$read = true;

while ($read) {
	$row = count($array);
	$array[$row] = array();
	do {
		$rowLen = count($array[$row]);
		$input = readline('Enter value for element [' . $row . '][' . $rowLen . ']');
		
		if ($input === '.') {
			break 2;
		}
		
		if ($input !== '') {
			$array[$row][] = $input;
		}
	} while ($input !== '');
}

print_r($array);