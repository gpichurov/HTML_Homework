<?php

$a = 1;
$b = &$a;

$b++;

var_dump($a, $b);