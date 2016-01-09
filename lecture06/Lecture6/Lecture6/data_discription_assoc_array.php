<?php

$persons = [
		[
		'name' => 'Ivan',
		'age' => 20,
		'gender' => 'male'
		],
		[
		'name' => 'Dragan', 
		'age' => 25,
		'gender' => 'male'
		],
		[
		'name' => 'Petkan', 
		'age' => 30,
		'gender' => 'male'
		]
];

// foreach ($persons as $person) {
// 	foreach ($person as $data) {
// 		echo $data, PHP_EOL;
// 	}
// 	echo str_repeat('-', 10), PHP_EOL;
// }

foreach ($persons as $person) {
	echo 'Name: ', $person['name'], ' Age: ', $person['age'],
	' Gender: ', $person['gender'], PHP_EOL;
}