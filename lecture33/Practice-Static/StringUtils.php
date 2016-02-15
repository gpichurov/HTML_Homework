<?php

class StringUtils
{
	public static function shortString($string, $length, $append = '...')
	{
		$strlen = mb_strlen($string, 'UTF-8');
		return mb_substr($string, 0, $length, 'UTF-8') . 
				($strlen > $length ? $append : '');
	}
	
	public static function isHtml($str)
	{
		return strip_tags($str) != $str;
	}
}