<?php

class Person 
{
	private $firstName;
	
	private $lastName;
	
	public function __construct($firstName = 'John', $lastName = 'Doe')
	{
		$this->setFirstName($firstName);
		$this->setLastName($lastName);
	}
	
	public function getFirstName()
	{
		return $this->firstName;
	}
	
	public function getLastName()
	{
		return $this->lastName;
	}
	
	public function setFirstName($name)
	{
		$this->firstName = $name;
	}
	
	public function setLastName($name) 
	{
		$this->lastName = $name;
	}
	
	public function getInfo()
	{
		return sprintf(
			'Hi my first name is %s and my last name is %s', 
			$this->getFirstName(), 
			$this->getLastName()
		);
	}
}