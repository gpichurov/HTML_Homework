<?php

// Задача 1:
// Да се състави програма, която сортира по метода на мехурчето
// предварително въведен двумерен масив с естествени числа.
// Сортирането да се извърши по редове/колони.
// Пример:
// 15; 16; 8; 1;
// 2; 3; 4; 7;
// 9; 11; 19; 6;
// Изход:
// 1; 2; 3; 4;
// 6; 7; 8; 9;
// 11; 15; 16; 19;

$array = [
		[15, 16, 8, 1],
		[2, 3, 4, 7],
		[9, 11, 19, 6]
];

$array2 = [];

for ($i = 0; $i < count($array); $i++) {
	for ($j = 0; $j < count($array[$i]); $j++) {
		$array2 [] = $array[$i][$j];
	}
}

for ($k = 0; $k < count($array2) - 1; $k++) {
	$swapMade = false;
	for ($l = 0; $l < count($array2) - $k - 1; $l++) {
		if ($array2[$l] > $array2[$l + 1]) {
			$swapMade = true;
			swap($array2, $l, $l + 1);
		}
	}
	if (!$swapMade) {
		break;
	}
}

$cnt = 0;
for ($m = 0; $m < count($array); $m++) {
	for ($n = 0; $n < count($array[$m]); $n++) {
		$array[$m][$n] = $array2[$cnt];
		$cnt++;
	}
}

print_r($array);


function swap(&$array, $from, $to) {
	$tmp = $array[$to];
	$array[$to] = $array[$from];
	$array[$from] = $tmp;
}