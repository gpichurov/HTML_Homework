<?php
/**
 * 
 * @var DateTime
 */
$victoryDay = DateTime::createFromFormat('d;m;Y', '09;05;1945');

$dateInterval = new DateInterval('P5D');

/* $victoryDay->add($dateInterval);

var_dump($victoryDay->format('Y-m-d')); */
//var_dump($victoryDay->add($dateInterval)->format('Y-m-d'));

$now = new DateTime();
var_dump($victoryDay->diff($now));
var_dump($now->add($now->diff($victoryDay))->format('Y-m-d'));