<?php

$array = [1, 0, 0, 1, 0, 1, 0];

foreach ($array as $key => $value) {
	if ($value == 1) {
		unset($array[$key]);
		$array[] = 1;
	}
}

print_r($array);