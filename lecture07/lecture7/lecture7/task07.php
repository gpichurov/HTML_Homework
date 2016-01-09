<?php

$a = [
		[1, 4, 7],
		[2, 5, 8],
		[3, 6, 9],
];


$mul = 1;
$mul1 = 1;

$rows = count($a);
for ($i = 0; $i < $rows; $i++) {
	$cols = count($a[$i]);
	for ($j = 0; $j < $cols; $j++){
		if ($j < $i) {
			echo $a[$i][$j], ',';
			$mul *= $a[$i][$j];
		}
	}
	echo PHP_EOL;
}
echo  $mul;

// for ($i = 1; $i < count($a); $i++) {
// 	for ($j = 0; $j < $i; $j++){
// 		$mul *= $a[$i] [$j];
// 	}
// }

// echo $mul, PHP_EOL;

// for ($i = 1; $i < count($a); $i++) {
// 	$mul1 *= $a[$i] [$i -1];
// }

// echo $mul1;