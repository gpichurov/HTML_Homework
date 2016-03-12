<?php
interface IStorable
{
	public function addQuantity($quantity);
	
	public function removeQuantity($quantity);
	
	public function getQuantity();
}