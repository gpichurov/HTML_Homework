<?php
function sum($a, $b){
	return $a + $b;
}

function changeA() {
	global $a;
	
	$a++;
}

function piramidVolume($a, $b, $h) {
	echo $a * $b * $h / 3;
}

function sumChanged(&$a, &$b){
	
	return ++$a + ++$b;
}
