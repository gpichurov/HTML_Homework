<?php

$a = [
		[1, 2, 3, 4, 5, 6],
		[7, 8, 9, 10, 11, 12],
		[13, 14 , 15, 16, 17],		
];

$maxSum = 0;
$maxFirstRow = 0;
$maxFirstCow = 0;


$rows = count($a);
for ($i = 0; $i < $rows - 1; $i++) {
	$cols = count($a[$i]);
	for ($j = 0; $j < $cols - 1; $j++){
		$sum = $a[$i][$j] + $a[$i + 1][$j] + $a[$i][$j + 1] + $a[$i + 1][$j + 1];
		if (!isset($maxSum) || $maxSum < $sum) {
			$maxSum = $sum;
			$maxFirstRow = $i;
			$maxFirstCow = $j;
		}
	}
}

echo 'Max sum is ', $maxSum, PHP_EOL;
echo 'Max sum submatrix is ', PHP_EOL;
echo $a[$maxFirstRow][$maxFirstCow], ', ', $a[$maxFirstRow][$maxFirstCow + 1], PHP_EOL;
echo $a[$maxFirstRow + 1][$maxFirstCow], ', ', $a[$maxFirstRow + 1][$maxFirstCow + 1];