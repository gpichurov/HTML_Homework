<?php
use test\TestClass;
require_once 'TestClass.php';

function testFunction() {
	$className = "test\TestClass";
	$object = new $className;
	$methodName = 'testPublic';
	
	var_dump($object->$methodName());
	$fn = function () use ($className){
	
		echo $className;
	};
	
	$fn();
}

//testFunction();

function sum($a, $b) {
	return $a + $b;
}

var_dump(call_user_func('sum', 2, 3));
var_dump(call_user_func_array('sum', [2, 3]));

$sum = function ($a, $b) {
	return $a + $b;
};

var_dump(call_user_func($sum, 3, 3));
var_dump(call_user_func_array($sum, [3, 3]));

class SumAB
{
	public static function sum($a, $b) 
	{
		return $a + $b;
	}
	
	public function sumDynamic($a, $b)
	{
		return $a + $b;
	}
}

var_dump(call_user_func(['SumAB', 'sum'], 4, 3));
var_dump(call_user_func_array('SumAB::sum', [4, 3]));

$sum = new SumAB();
var_dump(call_user_func([$sum, 'sumDynamic'], 5, 3));
var_dump(call_user_func_array([$sum, 'sumDynamic'], [5, 3]));