<?php

require_once 'autoload.php';

$a = [
	new Vehicle('Toyota'),
	new Vehicle('Mazda'),
	new Vehicle('Honda'),
	new Vehicle('Suzuki'),
	new Vehicle('Subaru'),
];

foreach ($a as $key => $value) {
	$value->setDescription($value->getDescription() . ' - ' . $key);
	echo $value->getDescription(), PHP_EOL;
}

var_dump($a);