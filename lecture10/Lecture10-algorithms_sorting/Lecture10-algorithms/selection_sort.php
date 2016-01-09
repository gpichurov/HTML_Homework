<?php
#$array = [6, 5, 3, 1, 8, 7, 2, 4];

$array = [7, 3, 9, 6, 5, 1, 2, 0, 8, 4];


for ($i = 0; $i < count($array); $i++) {
	$min = $array[$i];
	$minKey = $i;
	
	for ($j = $i; $j < count($array); $j++) {
		if (!isset($min) || $array[$j] < $min) {
			$min = $array[$j];
			$minKey = $j;
		}
	}
	
	swap($array, $minKey, $i);
}


print_r($array);

function swap(&$array, $from, $to) {
	$tmp = $array[$to];
	$array[$to] = $array[$from];
	$array[$from] = $tmp;
}