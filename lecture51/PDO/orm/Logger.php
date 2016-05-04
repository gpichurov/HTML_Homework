<?php

class Logger
{
	private static $log = [];
	
	public static function log($param) {
		self::$log[] = $param;
	}
	
	public static function flush()
	{
		$l = self::$log;
		self::$log = [];
		
		return $l;
	}
}