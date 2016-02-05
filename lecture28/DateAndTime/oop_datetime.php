<?php
$datetime = new DateTime();
// date('Y-m-d H:i:s')

$datetime->setDate($datetime->format('Y'), 5, 1);
$datetime->setTime(17, $datetime->format('i'));

var_dump($datetime->format('Y-m-d H:i:s'));

$victoryDay = DateTime::createFromFormat('d;m;Y', '09;05;1945');
var_dump($victoryDay->format('Y-m-d H:i:s'));

$victoryDay->setTimestamp(time());
var_dump($victoryDay->format('Y-m-d H:i:s'));