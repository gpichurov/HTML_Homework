<?php

class CustomMethods
{
	public $data = [];
	
	public function addData($row)
	{
		$this->data[] = $row;
		
		return $this;
	}
	
	public function __call($name, $arguments) 
	{
		$result = preg_match('/getData.*(OrderedBy)(.+)/', $name, $matches);
		if (!$result) {
			throw new BadMethodCallException('Not existing method!');
		}
		// 'getDataOrderedByMoney -> money'
		// 'getDataOrderedByCreditBallance -> credit_ballance'
		
		$field =  lcfirst($matches[2]);
		$field = preg_replace_callback('/([A-Z])/', function($matches) {
			var_dump($matches);
			return '_' . strtolower($matches[1]);
		}, $field);
		
		$fields = [];
		foreach ($this->data as $row) {
			$fields[] = $row[$field];
		}
		$data = $this->data;
		
		array_multisort($fields, $data, SORT_ASC);
		
		return $data;
	}
}