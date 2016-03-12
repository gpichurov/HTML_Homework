<?php

class Singleton
{
	private static $intance;
	
	private $name;
	
	private function __construct(){}
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	private function __clone(){}
	
	
	public static function getInstance() 
	{
		if (!self::$intance) {
			// self::$intance = new Singleton();
			self::$intance = new self();
		}
		
		return self::$intance;
	}
}

Singleton::getInstance()->setName('Onufri');

var_dump(Singleton::getInstance()->getName());

$s1 = Singleton::getInstance();

var_dump(Singleton::getInstance() === $s1);
