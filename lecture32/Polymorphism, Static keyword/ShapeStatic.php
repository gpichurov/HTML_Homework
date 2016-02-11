<?php
class ShapeStatic
{
	const DEFAULT_GRAPHIC = 'shape';
	
	protected  static $width = 0;
	
	protected static $height = 0;
	
	protected static $graphic = self::DEFAULT_GRAPHIC;
	
	public static function init($width, $height, $graphic = self::DEFAULT_GRAPHIC)
	{
		self::$width = $width;
		self::$height = $height;
		self::$graphic = $graphic;
	}
	
	public static function getWidth()
	{
		return self::$width;
	}
	
	public static function setWidth($width)
	{
		self::$width = $width;
	}
	
	public static function getHeight()
	{
		return self::$height;
	}
	
	public static function setHeight($height)
	{
		self::$height = $height;
	}
	
	public static function getInfo()
	{
		return sprintf(
					'%s %dx%d', 
					static::$graphic, 
					static::$width, 
					static::$height
				);
	}
	
	public static function getArea()
	{}
}

class RectangleStatic extends ShapeStatic
{
	protected static $width = 0;
	
	protected static $height = 0;
	
	protected static $graphic = self::DEFAULT_GRAPHIC;
}


var_dump(ShapeStatic::getInfo());
ShapeStatic::init(100, 200, 'custom shape');
var_dump(ShapeStatic::getInfo());
var_dump(RectangleStatic::getInfo());

