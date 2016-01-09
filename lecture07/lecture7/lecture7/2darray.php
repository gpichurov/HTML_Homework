<?php

$array = [
		[1, 2, 3, 4],
		[5, 6, 7, 8]
];

$rows = count($array);
for ($i = 0; $i < $rows; $i++) {
	$cols = count($array[$i]);
	for ($j = 0; $j < $cols; $j++) {
		$array[$i] [$j] = 0;
	}
}

print_r($array);

foreach ($array as $rowKey => $row) {
	foreach ($row as $colKey => $col) {
		$array[$rowKey] [$colKey] = 1;
	}
}

print_r($array);