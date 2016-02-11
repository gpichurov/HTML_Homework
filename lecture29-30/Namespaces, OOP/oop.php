<?php

require_once 'autoload.php';

$person = new Person;
$person->setFirstName('Peter');
$person->setLastName('Pan');
echo $person->getInfo(), PHP_EOL;

$person2 = new Person();
$person2->setFirstName('Captain');
$person2->setLastName('Hook');
echo $person2->getInfo(), PHP_EOL;

$vehicle = new Vehicle();
$vehicle->setDescription('Very nice vehicle');
echo $vehicle->getDescription(), PHP_EOL;

$car = $vehicle;
$car->setDescription('Very nice car');

$o1 = new stdClass();// {}| new Object()
$o2 = new stdClass();// {}| new Object()
var_dump($vehicle->getDescription(), $car === $vehicle, $o1 === $o2);