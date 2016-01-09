<?php

#$array = [6, 5, 3, 1, 8, 7, 2, 4];
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$iterationCounter = 0;
for ($j = 0; $j < count($array) - 1; $j++) {
	$iterationCounter++;
	
	$swapMade = false;
	for ($i = 0; $i < (count($array) - $j) - 1; $i++) {
		$iterationCounter++;
		if ($array[$i] > $array[$i + 1]) {
			$swapMade = true;
			swap($array, $i, $i + 1);
		}
	}	
	if (!$swapMade) {
		break;
	}
}
var_dump($iterationCounter);
print_r($array);

function swap(&$array, $from, $to) {
	$tmp = $array[$to];
	$array[$to] = $array[$from];
	$array[$from] = $tmp;
}