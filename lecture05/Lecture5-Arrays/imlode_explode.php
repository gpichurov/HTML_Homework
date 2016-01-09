<?php

$sentance = 'I am a   good person.';

$words = explode(' ', $sentance);
var_dump($words);

$words = array_filter($words);
var_dump($words);


$word = 'tomato';
#var_dump(explode('', $word));

$ingradients = [
	'tomato',
	'onion',
	'olives',
	'cheese'
];

$salad = implode(', ', $ingradients);

echo 'The salad contains ', $salad , '.',PHP_EOL;


$users = [
	'first' => 'Ivan',	
	'second' => 'Dragan',
	'third' => 'Petkan',
];

$users[] = 'User X';

print_r($users);