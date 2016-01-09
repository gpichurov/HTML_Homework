<?php
// include include_once require require_once
require_once 'readline.php';

// $x = readline('Enter X' . PHP_EOL );
// $y = readline('Enter Y' . PHP_EOL );

// echo $x + $y, PHP_EOL;

$a = 2;

$b = 4;

//$a = $a + $b;
$a += $b;
#var_dump($a);

$c = $a--;
var_dump($c, $a);