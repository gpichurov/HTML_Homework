<?php

$number = '10.50';
var_dump(serialize($number));

$serialized = 's:5:"10.50";';
var_dump(unserialize($serialized));

$array = [1, 2, 3, [
		'a' => 'b',
		'c' => 'd'
]];

var_dump(serialize($array));
var_dump(json_encode($array));

class Asdf
{
	public $a = 2;
	
	public $b = 4;
}

$t = new Asdf;

var_dump(serialize($t));

$serializedObject = '"O:4:"Test":2:{s:1:"a";i:2;s:1:"b";i:4;}"';

var_dump(unserialize($serializedObject));