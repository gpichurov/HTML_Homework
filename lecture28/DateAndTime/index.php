<?php
define('ONE_DAY_IN_SECONDS', 86400);

//var_dump(getdate());
// 09.05.1945
$timestamp = mktime(0, 0, 0, 5, 9, 1945);
$victoryDay = date('d.m.Y', $timestamp);

// 09.05.1945 -> 1945-05-09
// 09/05/1945
$victoryDaySpaces = '05/09/1945';
// v1
//$fiveDaysAfter = strtotime($victoryDaySpaces) + (5 * ONE_DAY_IN_SECONDS);
$fiveDaysAfter = strtotime($victoryDaySpaces . ' - 13 month');
$victoryDayMySqlFormat = date('Y-m-d', $fiveDaysAfter);
var_dump($victoryDayMySqlFormat);

var_dump(microtime(), microtime(true));
