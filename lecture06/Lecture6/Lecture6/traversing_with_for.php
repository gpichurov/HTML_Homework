<?php

$arrayMulty = array(
		array(1, 2, 3),
		array(4, 5, 6),
		array(7, 8, 9),
);

unset($arrayMulty[1][1]);

$len = count($arrayMulty);

for ($i = 0; $i < $len; $i++) {
	$lenRow = count($arrayMulty[$i]);
	for ($j = 0; $j < $lenRow; $j++) {
		echo $arrayMulty[$i][$j], PHP_EOL;
	}
}

