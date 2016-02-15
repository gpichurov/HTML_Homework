<?php

class InstanceCounter
{
	const MAX_INSTANCES = 5;
	
	private static $instancesCount = 0;
	
	public function __construct()
	{
		if (self::$instancesCount++ >= 5) {
			throw new Exception(sprintf('Only %d instances of ' .
					__CLASS__ . ' are allowed', self::MAX_INSTANCES));
		}
	}
	
	/* public function getInstancesCount()
	{
		return self::$instancesCount;
	} */
	
	 public static function getInstancesCount()
	 {
	 	return self::$instancesCount;
	 } 
}

$i1 = new InstanceCounter();
//echo $i1->getInstancesCount(), PHP_EOL;
echo InstanceCounter::getInstancesCount(), PHP_EOL;
$i2 = new InstanceCounter();
//echo $i2->getInstancesCount(), PHP_EOL;
echo InstanceCounter::getInstancesCount(), PHP_EOL;
$i3 = new InstanceCounter();
// echo $i3->getInstancesCount(), PHP_EOL;
echo InstanceCounter::getInstancesCount(), PHP_EOL;

$i4 = new InstanceCounter();
//echo $i4->getInstancesCount(), PHP_EOL;
echo InstanceCounter::getInstancesCount(), PHP_EOL;
$i5 = new InstanceCounter();
//echo $i5->getInstancesCount(), PHP_EOL;
echo InstanceCounter::getInstancesCount(), PHP_EOL;
var_dump([$i1->getInstancesCount(), $i2->getInstancesCount(), $i3->getInstancesCount(),
		$i4->getInstancesCount(), $i5->getInstancesCount()]);