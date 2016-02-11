<?php

class Rectangle extends Shape
{
	public function getArea()
	{
		return $this->width * $this->height;
	}
}