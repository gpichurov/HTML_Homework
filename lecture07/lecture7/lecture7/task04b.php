<?php

$array = [1, 0, 0, 1, 0, 1, 0];
$cnt = 0;

foreach ($array as $key => $value) {
	if ($value == 1) {
		$cnt++;
	}
}

foreach ($array as $key => $value) {
	if ($key >= count($array) - $cnt) {
		$array[$key] = 1;
	}
	else {
		$array[$key] = 0;
	}
}
print_r($array);