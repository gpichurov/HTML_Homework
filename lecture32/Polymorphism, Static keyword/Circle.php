<?php

define('CONT_NAME', 'value');

const OTHER_CONSTANT = 'value';

const CONSTANT_ARRAY = [
	'a' => 1,
	'b' => 2
];

class Circle
{
	const PI = 3.14;
	
	const DEFAULT_RADIUS = 3;
	
	public static function getArea($r = self::DEFAULT_RADIUS)
	{
		
		return self::PI * pow($r, 2);
	}
}

var_dump(Circle::getArea(5));