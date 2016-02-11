<?php

use function product\functions\calculateCircleArea;
require_once 'product/functions/calculate.php';
require_once 'sum/functions/calculate.php';



$a = 5;
$b = 3;

echo \product\functions\calculate($a, $b), PHP_EOL;
echo \sum\functions\calculate($a, $b);

var_dump(calculateCircleArea(4));