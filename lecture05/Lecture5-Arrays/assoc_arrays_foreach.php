<?php


$zeroIndexedArray = [1, 2, 3, 4, 6];

for ($i = count($zeroIndexedArray); $i >= 0; $i--) {
	unset($zeroIndexedArray[$i]);
}

#print_r($zeroIndexedArray);

$assocArray = [
	'one' => 1,
	'two' => 2,
	'three' => 3,
	'four' => 4
];

// $currentValue = current($assocArray);
// $currentKey = key($assocArray);
// var_dump($currentValue, $currentKey);

// next($assocArray);

// $currentValue = current($assocArray);
// $currentKey = key($assocArray);
// var_dump($currentValue, $currentKey);


foreach ($assocArray as $value) {
	echo $value, PHP_EOL;
	
	if ($value === 2) {
		break;
	}
}

var_dump(current($assocArray));


reset($assocArray);

var_dump(current($assocArray));