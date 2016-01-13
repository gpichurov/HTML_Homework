<?php


$array = [
	[1 , 2 , 3 , 4 ],
	[5 , 6 , 7 , 8 ],
	[9 , 10, 11, 12],
	[13, 14, 15, 16],
];

$cols = 4;

// for ($i = 0; $i < $cols; $i++) {
// 	for ($j = 0; $j < $cols; $j++) {
		
// 		if ($j == $cols - $i - 1) {
// 			echo $array[$i][$j], PHP_EOL;
// 		}
		
// 	}
// }

for ($i = 0; $i < $cols; $i++) {
	$j = $cols - $i - 1;
	echo $array[$i][$j], PHP_EOL;
}