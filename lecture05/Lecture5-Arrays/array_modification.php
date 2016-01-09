<?php

$array = [1, 3, 5, 7, 2, 9, 8];

$array[5] = 12;


unset($array[0], $array[1], $array[2]);


$array[0] = 'Zero';

print_r($array);