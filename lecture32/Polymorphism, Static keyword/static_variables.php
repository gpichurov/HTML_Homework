<?php
class Test {
	
	private static $flag = 2; 
	
	public function callOneTime()
	{
		$flg = $this->getFlag();
		
		var_dump($flg);
	}
	
	public static function getFlag()
	{
		var_dump(isset($this));
		return self::$flag;
	}
}
// $instance->getFlag()
var_dump(Test::getFlag());

$t = new Test();
$t->callOneTime();

$object
	->select()
	->where([
	'id' => 15,
	'name' => 'asff'
])->one();
