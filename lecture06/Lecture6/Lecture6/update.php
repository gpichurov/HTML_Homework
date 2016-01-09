<?php

$arrayMulty = array(
		array(1, 2, 3),  //0
		array(4, 5, 6),  //1
		array(7, 8, 9),  //2
);			//0  1  2

$value = $arrayMulty[0][1] = 100;
$arrayMulty[0][1]++;

print_r($arrayMulty);