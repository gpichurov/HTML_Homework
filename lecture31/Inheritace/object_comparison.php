<?php

class A 
{
	public $b = 5;	
}

$a = new A;
$b = new A;

$objects = [];

foreach ([$a, $b] as $obj) {
	if (!in_array($obj, $objects)) {
		$objects[] = $obj;
	}
}

var_dump($objects, in_array($a, $objects, true));