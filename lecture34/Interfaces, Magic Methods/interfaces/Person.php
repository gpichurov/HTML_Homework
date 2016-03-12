<?php

class Person implements IPerson
{
	const DEFAULT_MONEY = 1000;
	
	private $name;
	
	private $age;
	
	private $money;
	
	private $items;
	
	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
		$this->money = self::DEFAULT_MONEY;
		$this->items = [];
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getAge() 
	{
		return $this->age;
	}
	
	public function buy(ISellable $item)
	{
		if ($item->getPrice() > $this->money) {
			return false;
		}
		
		$this->money -= $item->getPrice();
		$this->items[] = $item;
	}
	
	public function __toString()
	{
		return sprintf(
			'%s %d %.2f', 
			$this->name, 
			$this->age, 
			$this->money
		);
	}
}