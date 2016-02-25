<?php

function doSomething() {
	$a = 5; $b = 10;
	$array = ['id' => 5, 'name' => 'Some Name'];
	$key = isset($_GET['key']) ? $_GET['key'] : '';
	//if ($key == 'id' || $key == 'name') {
		echo $array[$key];
	//} else {
	//	throw new Exception(E_ERROR, 'No index ' . $key . ' in the array');
	//}
}

function outerFunction() {
	doSomething();
}