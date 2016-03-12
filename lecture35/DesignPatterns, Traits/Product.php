<?php

class Product implements IStorable
{
	use StorableTrait, NameTrait;
	
	private $price;
	
	public function __construct($price, $name)
	{
		$this->price = $price;
		$this->setName($name);
	}
	
	
	
	public function sell()
	{
		$this->removeQuantity(1);
	}
	
	
}