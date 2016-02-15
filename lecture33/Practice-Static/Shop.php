<?php

class Shop
{
	private static $isOpen = true;
	
	public static function getIsOpen()
	{
		return self::$isOpen;
	}
	
	public static function setIsOpen($value) 
	{
		self::$isOpen = $value ? true : false;
	}
	
	public function work()
	{
		if (self::getIsOpen()) {
			echo 'Work, work', PHP_EOL;
		} else {
			echo 'Closed, I am not working', PHP_EOL;
		}
	}
}