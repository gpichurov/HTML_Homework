<?php
//var_dump(getdate());
date_default_timezone_set("Europe/Sofia");
$time = mktime(0, 0, 0, 5, 9, 1945);
var_dump(date('d-m-Y H:i:s', $time));


$datetime = new DateTime();
var_dump($datetime->format('d-m-Y H:i:s'));

//$datetime->setDate($datetime->format('Y'), 5, 1);
//$datetime->setTime(17, $datetime->format('í'));
//var_dump($datetime->format('d-m-Y H:i:s'));

$victoryDay = DateTime::createFromFormat('d;m;Y', '09;05;1945');
var_dump($victoryDay->format('d-m-Y H:i:s'));

$victoryDay->setTimestamp(time());