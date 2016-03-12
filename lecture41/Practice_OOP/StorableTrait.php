<?php

trait StorableTrait
{
	
	public function store($fileName)
	{
		$path = $this->getPath() . DIRECTORY_SEPARATOR . $fileName . '.txt';
		if (!is_dir(dirname($path))) {
			mkdir(dirname($path), 0777, true);
		}
		file_put_contents($path, serialize($this));
	}
	
	protected function getPath() 
	{
		return get_class($this);
	}
}