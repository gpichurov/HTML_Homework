<?php

$array = [
	'ford' => 200,
	'ferary' => 270,
	'lamborgini' => 330,
	'opel' => 100
];

foreach ($array as $key => $value) {
	echo $key,  ' goes with ', $value, 'km/h', PHP_EOL;
}