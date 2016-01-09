<?php

require_once 'functions.php';
$a = 2;
$b = 4;

$sumPow2 = sum($a, $b) * sum($a, $b);

var_dump($sumPow2);