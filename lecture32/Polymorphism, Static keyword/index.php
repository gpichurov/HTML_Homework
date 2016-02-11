<?php

ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL |E_STRICT);

require_once 'autoload.php';

$t = new Triangle(100, 100, 'images/triangle.jpg');

/**
 * 
 * @param Shape[] $shapes
 */
function getShapesTotalArea($shapes) {
	$total = 0;
	
	foreach ($shapes as $shape) {
		$total += $shape->getArea();
	}
	
	return $total;
}

$shapesArray = [
		new Rectangle(100, 50, 'images/rectangle.png'),
		new Triangle(100, 150, 'images/triangle.jpg'),
		new Square(100, 'images/square.jpg'),
];

$total = getShapesTotalArea($shapesArray);

var_dump($total);