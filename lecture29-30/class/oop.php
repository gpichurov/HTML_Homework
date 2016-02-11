<?php

require_once 'autoload.php';

$person = new Person;
$person->setFirstName('Peter');
$person->setSurName('Pan');
echo $person->getInfo();

$person2 = new Person();
$person2->setFirstName('Capitan');
$person2->setSurName('Hook');
echo $person2->getInfo();

$vehicle = new Vehicle();
$vehicle->setDescription('Very nice vehicle');
echo $vehicle->getDescription() . PHP_EOL;

