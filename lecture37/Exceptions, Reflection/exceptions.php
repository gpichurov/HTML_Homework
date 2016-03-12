<?php

class MyCustomException  extends Exception 
{}


function test($a) {
	if ($a < 0) {
		throw new Exception('We expected the first argument to be positive!');
	}
	
	if ($a == 0) {
		throw new MyCustomException('Param must be greater than zero');
	}
}
try {
	test(0);
} catch (MyCustomException $me) {
	var_dump(is_a($me, 'Exception'));
	echo 'My custom exception caught';
} catch (Exception $ex) {
	var_dump(get_class($ex));
	echo 'Exception cought';
}