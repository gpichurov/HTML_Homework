<?php

class User extends ActiveRecord
{
	public $id;

	public $username;

	public $password;
	
	public $test;
	
	protected function getNotStrorableFields()
	{
		return ['test'];
	}
	
}