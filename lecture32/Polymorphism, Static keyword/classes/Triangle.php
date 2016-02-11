<?php

class Triangle extends Shape
{
	public function getArea() 
	{
		return ($this->width * $this->height) / 2;
	}
}