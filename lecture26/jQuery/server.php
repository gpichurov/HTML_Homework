<?php

//header('Content-Type: application/json');

$number = rand(0, 5);

echo json_encode([
	'number' => $number
]);