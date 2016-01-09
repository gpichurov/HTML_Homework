<?php

$a = 0;
$b = false;
$c = true;
$d = null;

// var_dump(isset($c) ? 'C is not null and is defined': 'C is null or not defined');
// var_dump(empty($c) ? 'C is "", [], null, false' : 'C is different than "", [], null, false');


$array = array(
		'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'
);

$arrayLength = count($array);

var_dump($arrayLength);