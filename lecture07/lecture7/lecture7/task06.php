<?php

$a = [
		[1, 4, 7],
		[2, 5, 8],
		[3, 6, 9],
];

for ($i = 0; $i < count($a); $i++){
	echo $a[$i] [$i] . ' ';
}

echo PHP_EOL;

for ($i = 0; $i < count($a); $i++) {
	for ($j = 0; $j < count($a); $j++) {
		if ($i == $j) {
			echo $a[$i] [$j] . ' ';
		}
	}
}