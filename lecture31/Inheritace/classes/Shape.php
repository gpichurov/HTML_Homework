<?php

abstract class Shape
{
	/**
	 * 
	 * @var int
	 */
	protected $width;
	
	/**
	 * 
	 * @var int
	 */
	protected $height;
	
	/**
	 * 
	 * @var string
	 */
	private $image;
	
	/**
	 * 
	 * @var string
	 */
	protected  $name;
	
	/**
	 * 
	 * @param int $width
	 * @param int $height
	 * @param string $image
	 */
	public function __construct($width, $height, $image)
	{
		$this->width = $width;
		$this->height = $height;
		$this->image = $image;
	}
	
	/**
	 * @return string
	 */
	public function display()
	{
		return sprintf(
				'<img src="%s" width="%d" height="%d">',
				$this->image,
				$this->width, 
				$this->height
			);
	}
	
	/**
	 * 
	 * @param int $width
	 * @param int $height
	 */
	public function resize($width, $height)
	{
		$this->width = $width;
		$this->height = $height;
	}
	
	final public function getName()
	{
		if (!$this->name) {
			throw Exception('You must define name for your shape');
		}
		
		return $this->name;	
	}
	
	abstract public function getArea();
}