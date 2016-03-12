<?php

require_once 'CustomMethods.php';

$row1 = [
	'name' => 'Asen Asenov',
	'person_age' => 19
];

$row2 = [
	'name' => 'Boris Borisov',
	'person_age' => 16
];

$obj = new CustomMethods();
$obj->addData([
		'name' => 'Yanka Rupkina',
		'age' => 45
])->addData($row1)->addData($row2);

var_dump($obj->getDataOrderedByName());