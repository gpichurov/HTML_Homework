<?php
class Division
{
	private $a;
	
	private $b;
	
	function __construct($a, $b)
	{
		$this->a = $a;
		$this->b = $b;
	}
	
	public function divide($quotient = false)
	{
		$this->checkParam($this->b);
		
		$result =  $this->a / $this->b;
		
		return $this->getReturnValue($result, $quotient);
	}
	
	public function checkParam($p)
	{
		if ($p == 0) {
			throw new Exception('Ivalid Params');
		}
	}
	
	public function getReturnValue($value, $quotient)
	{
		return $quotient ? (int) $value : $value; 
	}
	
	public function __invoke($p)
	{
		return $this->divide($p);
	}
	
	
}