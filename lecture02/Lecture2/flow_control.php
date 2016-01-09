<?php

$a = 2;
$b = 3;

if ($a !== $b) {
	echo 'A is not identical to B', PHP_EOL;
} else {
	echo 'A is identical to B', PHP_EOL;
}

if ($a > $b) {
	echo 'A is greater then B', PHP_EOL;
} else if ($a < $b) {
	echo 'A is smaller then B', PHP_EOL;
} else {
	echo 'A is equal to B', PHP_EOL;
}


if ($a > 0 && $a == $b) {
	echo 'A is equal to B and greater than 0', PHP_EOL;
}


if ($a = $b) {
	echo 'A is equal to B', PHP_EOL;
}