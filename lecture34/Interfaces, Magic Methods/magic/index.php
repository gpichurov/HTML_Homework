<?php

require_once 'Division.php';
$d = new Division(40, 5);
echo $d(true), PHP_EOL;

$f = function ($a, $b, $whole = false) {
	$r = $a / $b;
	
	return $whole ? (int) $r : $r;
};

echo $f(40, 5);

var_dump(serialize($d));
//serialize($f);