<?php

class ErrorHandler
{
	public static function handleAll() {
		$args = func_get_args();
		if (count($args) == 1) {
			static::handleException($args[0]);
		} else {
			call_user_func_array([get_called_class(), 'handleError'], $args);	
		}
		
	}
	
	public static function handleError() {
		;
	}
	
	public static function handleException() {
		;
	}
}