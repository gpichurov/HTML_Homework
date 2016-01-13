<?php

sleep(2);

$response = [
	'employees' => [
		[
			'firstName' => 'John',
			'lastName' => 'Doe',
			'active' => true	
		],
		[
			'firstName' => 'Jane',
			'lastName' => 'Doe',
			'active' => true
		],
		[
			'firstName' => 'Adam',
			'lastName' => 'Smith',
			'active' => true
		],
		[
			'firstName' => 'David',
			'lastName' => 'Bowie',
			'active' => false
		],
	]	
];

$active = isset($_POST['active']) ? $_POST['active'] : 'all';

if ($active !== 'all') {
	$employees = [];
	foreach ($response['employees'] as $value) {
		if ($value['active'] == $active) {
			$employees[] = $value;
		}
	}
	
	$response['employees'] = $employees;
}

echo json_encode($response);