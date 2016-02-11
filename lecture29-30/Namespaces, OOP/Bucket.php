<?php

class Bucket 
{
	private $maxVolume;
	
	private $currentVolume;
	
	private $name;
	
	public function __construct($maxVolume, $currentVolume, $name) 
	{
		$this->name = $name;
		$this->maxVolume = $maxVolume;
		$this->currentVolume = $currentVolume;
	}
	
	public function getName()
	{
		return $this->name;
	}

	public function getCurrentVolume()
	{
		return $this->currentVolume;
	}
	
	public function getMaxVolume()
	{
		return $this->maxVolume;
	}
	
	public function getRemainingSpace()
	{
		return $this->maxVolume - $this->currentVolume;
	}
	
	public function addLiquid($volume)
	{
		$this->currentVolume += $volume;
		if ($this->currentVolume > $this->maxVolume) {
			$this->currentVolume = $this->maxVolume;
		}
	}
	
	public function emptyDownDrain() 
	{
		$this->currentVolume = 0;
	}
	
	public function fill()
	{
		$this->currentVolume = $this->maxVolume;
	}
	
	public function transfer($bucket)
	{
		$remainingVolume = $this->getRemainingSpace();
		if ($bucket->getCurrentVolume() > $remainingVolume) {
			$this->addLiquid($remainingVolume);
			$bucket->addLiquid(-$remainingVolume);
		} else {
			$this->addLiquid($bucket->getCurrentVolume());
			$bucket->emptyDownDrain();
		}
	}
}