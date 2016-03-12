<?php

class SerializableClass
{
	public $a;
	
	public $b;
	
	public $c;
	
	public function __construct($a, $b, $c)
	{
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}
	
	public function __sleep() 
	{
		echo '__sleep called', PHP_EOL;
		return ['a', 'b'];
	}
	
	public function __wakeup()
	{
		echo '__wakeup called', PHP_EOL;
		$this->c = 15;
	}
}