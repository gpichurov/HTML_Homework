<?php

class Door 
{
	private $status;
	
	private $lock;
	
	public function __construct($status, Lock $lock)
	{
		$this->status = $status;
		$this->lock = $lock;
	}
	
	public function display()
	{
		return 'The door is ' . $this->status . ' ' . $this->lock->display();
	}
}