<?php

$arrayMulty = array(
		array(1, 2, 3),
		array(4, 5, 6),
		array(7, 8, 9),
);

unset($arrayMulty[1][1]);

foreach ($arrayMulty as $rowIndex => $row) {
	foreach ($row as $colIndex => $colValue) {
		echo $colValue, PHP_EOL;
	}
}