<?php
/**
 * 
 * @author Dev-1
 * @property string $nameField
 */
class CustomFields
{
	private $fields = [];
	
	private $realField;
	
	// nameField, ageField
	public function __set($name, $value) 
	{
		echo '__set Called', PHP_EOL; 
		if (preg_match('/Field$/', $name)) {
			$key = str_replace('Field', '', $name);
			$this->fields[$key] = $value;
		}
	}
	
	public function __get($name)
	{
		echo '__get Called', PHP_EOL;
		if (preg_match('/Field$/', $name)) {
			$key = str_replace('Field', '', $name);
			if (isset($this->fields[$key])) {
				return $this->fields[$key];
			}
		}
	}
	
	public function __isset($name) 
	{
		echo '__isset Called', PHP_EOL;
		if (preg_match('/Field$/', $name)) {
			$key = str_replace('Field', '', $name);
			return isset($this->fields[$key]);
		}
	}
	
	public function __unset($name)
	{
		echo '__unset Called', PHP_EOL;
		if (preg_match('/Field$/', $name)) {
			$key = str_replace('Field', '', $name);
			 unset($this->fields[$key]);
		}
	}
}