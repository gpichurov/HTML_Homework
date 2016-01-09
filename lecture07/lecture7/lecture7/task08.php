<?php

$a = [
		[false, false, false, false],
		[false, true, false, false],
		[false, false, false, false],
		[false, false, false, false],
];


$hasTrue = false;

$rows = count($a);
for ($i = 0; $i < $rows; $i++) {
	$cols = count($a[$i]);
	for ($j = 0; $j < $cols; $j++){
		if ($j < $cols - $i - 1 && $a[$i][$j] == true) {
			$hasTrue = true;
		}
	}
}

echo $hasTrue ? 'There is' : 'There is not', ' true above the second diagonal.';