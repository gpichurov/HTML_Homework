<?php
require_once 'autoload.php';

/* $person = new Person();

$person->setFirstName('Davy');
$person->setLastName('Jones'); */

$person = new Person('Davy', 'Jones');

var_dump($person->getInfo());

$vehicle = new Vehicle('Very nice');
$a = $vehicle;
$b = $vehicle;

$a->setDescription('New Description');

var_dump($vehicle->getDescription(), 
		$a->getDescription(), 
		$b->getDescription());