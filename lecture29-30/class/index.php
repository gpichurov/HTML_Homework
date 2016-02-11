<?php
require_once 'product/functions/calculate.php';
require_once 'sum/functions/calculate.php';

echo \product\functions\calculate(3, 2), PHP_EOL;
echo \sum\functions\calculate(3, 2);

var_dump();