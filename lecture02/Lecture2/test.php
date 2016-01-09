<?php

/* define('ONE', 2);
define('TWO', 4); */

$one = 1;

$two = 2;

/*
 * this code ads $a and $b
 */

// 1 is assigned to $a
$a = $one;
# 2 is assigned to $b
$b = $two;

// we output the result of addition of $a and $b
echo $a + $b, PHP_EOL;

$a = 5;
$b = 10;

echo $a + $b, PHP_EOL;

$someVariable;

$someVariable = 'some value';

echo $someVariable, PHP_EOL;

$variableName = 'a';

echo $$variableName, PHP_EOL;

$a = 'Hello';
$b = 'World';

// Hello World!

$c = $a . ' ' . $b . '!' . PHP_EOL;

echo $c;
echo 'Something Else', PHP_EOL;

$name = 'Maria';

echo "Hello $name !";

echo "The value of \$a = \"$a\" and the value of \$b = \"$b\"", PHP_EOL;
echo 'The value of $a = \'' . $a . '\' and the value of $b = \'' . $b . '\'', PHP_EOL;


$x = 343412;

$y = 1234;

$z = -1214;

$xyz = $x . ' ' . $y . ' ' . $z;

echo $xyz, PHP_EOL;

echo '5' + '4', PHP_EOL;



$floatX = 2.5;
$floatY = 3.5;

echo $floatX + $floatY, PHP_EOL;

$null = '';

echo $null;

var_dump($null);

echo true . ' ' . false;