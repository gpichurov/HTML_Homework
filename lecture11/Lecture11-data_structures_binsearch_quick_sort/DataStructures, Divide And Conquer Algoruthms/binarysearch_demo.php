<?php

require_once 'binarysearch.php';

$array = [12, 25, 30, 31, 35, 39, 41, 56];

$result = binary_search($array, 200, 0, count($array) - 1);

var_dump($result);