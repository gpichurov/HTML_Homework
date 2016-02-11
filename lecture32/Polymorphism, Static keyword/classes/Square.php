<?php

class Square extends Rectangle
{
	public function __construct($size, $image)
	{
		parent::__construct($size, $size, $image);
		$this->name = 'Square';
	}
	
	public function resize($width, $height = null)
	{
		parent::resize($width, $width);
	}
	
	public function getArea()
	{
		return $this->width * $this->width;
	}
}