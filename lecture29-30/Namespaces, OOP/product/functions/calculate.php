<?php
namespace product\functions;
use \stdClass;

function calculate($a, $b) {
	return $a * $b;
}


function calculateCircleArea($r) {
	return pi() * pow($r, 2);
}

$test = new stdClass();