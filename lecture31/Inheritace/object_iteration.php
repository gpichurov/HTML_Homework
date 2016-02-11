<?php

class SomeClass
{
	private $a = 1;
	
	private $b = 2;
	
	private $c = 3;
	
	public $d = 4;
	
	public $e = 5;
	
	protected $f = 6;
	
	protected $g = 7;
	
	public function iterate() 
	{
		foreach ($this as $key => $value) {
			echo 'key = ', $key, ' value = ', $value, PHP_EOL;
		}
	}
}

$obj = new SomeClass();

/* foreach ($obj as $key => $value) {
	echo 'key = ', $key, ' value = ', $value, PHP_EOL;
} */

$obj->iterate();