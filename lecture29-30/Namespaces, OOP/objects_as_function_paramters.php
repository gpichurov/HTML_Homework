<?php

require_once 'autoload.php';

$vehicle = new Vehicle('Ford');

function changeDescription($object) {
	$object->setDescription('New Description');
}

var_dump($vehicle->getDescription());

changeDescription($vehicle);

var_dump($vehicle->getDescription());