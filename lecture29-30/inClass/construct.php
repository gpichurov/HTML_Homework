<?php

require_once 'autoload.php';

$person = new Person('Day', 'Ball');

var_dump($person->getInfo());

$vehicle = new Vehicle('Nice car !!');

$a = $vehicle;
$b = $vehicle;

unset($a);

var_dump($a, $b);