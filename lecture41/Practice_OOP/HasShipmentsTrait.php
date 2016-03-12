<?php

trait HasShipmentsTrait
{
	protected $shipments = [];
	
	public function addShipment(Item $item)
	{
		$this->shipments[$item->getID()] = $item;
	}
	
	public function removeShipment(Item $item)
	{
		if ($key = array_search($item, $this->shipments, true))
		{
			unset($this->shipments[$key]);
		}
	}
	
	public function getShipment($id)
	{
		if (isset($this->shipments[$id])) {
			return $this->shipments[$id];
		}
	}
	
	public function getShipments()
	{
		return $this->shipments;	
	}
}