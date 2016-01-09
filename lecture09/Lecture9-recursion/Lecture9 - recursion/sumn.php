<?php

require_once 'readline.php';

$sumn = 0;

$n = readline('Enter number');

for ($i = 1; $i <= $n; $i++) {
	$sumn += $i;
}

echo $sumn;


function sumn($n) {
	if ($n == 1) {
		return 1;
	}
	
	return $n + sumn($n -1);
}