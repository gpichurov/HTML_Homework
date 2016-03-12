<?php

interface IHasShipments
{
	public function addShipment(Item $item);
	
	public function removeShipment(Item $item);
	
	public function getShipment($id);
	
	public function getShipments();
}