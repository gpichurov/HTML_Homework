<?php

$a = [
		[1, 4, 7, 10],
		[2, 5, 8, 11],
		[3, 6, 9, 12],
];

$maxIndex = 0;
$maxSum = 0;

foreach ($a as $rowIndex => $row) {
	$currentRowSum = 0;
	
	foreach ($row as $colIndex => $col){
		$currentRowSum += $col;
	}
	
	if (!isset($maxSum) || $currentRowSum > $maxSum) {
		$maxSum = $currentRowSum;
		$maxIndex = $rowIndex;
	}
}

echo 'The row with max sum is ', $maxIndex;