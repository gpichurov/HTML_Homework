<?php

class InstanceCounter
{
	const MAX_INSTANCES = 5;
	
	private static $instacesCount = 0;
	
	public function __construct()
	{
		if (self::getInstancesCount() >= self::MAX_INSTANCES) {
			throw new Exception('Max instances count reached');
		}
		self::$instacesCount++;
	}
	
	public static function getInstancesCount()
	{
		return self::$instacesCount;
	}
}

new InstanceCounter();
new InstanceCounter();
new InstanceCounter();
new InstanceCounter();
new InstanceCounter();

var_dump(InstanceCounter::getInstancesCount());