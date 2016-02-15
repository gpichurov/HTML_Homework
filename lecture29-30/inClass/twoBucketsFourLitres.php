<?php

require_once 'autoload.php';

$fiveBucket = new Bucket(5,5, "5L");
$threeBucket = new Bucket(3,0, "3L");

$threeBucket->transfer($fiveBucket);
var_dump($fiveBucket, $threeBucket);
$threeBucket->emptyDownDrain();
var_dump($fiveBucket, $threeBucket);
$threeBucket->transfer($fiveBucket);
var_dump($fiveBucket, $threeBucket);
$fiveBucket->fill();
var_dump($fiveBucket, $threeBucket);
$threeBucket->transfer($fiveBucket);
var_dump($fiveBucket, $threeBucket);