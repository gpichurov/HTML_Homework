<?php

// function foo($var)
// {
//     $var++;
// }

// $a=5;
// foo($a);
// echo $a;

// $e =  1.5;
// echo floor($e);
// echo ceil($e);
// echo round($e);

$ar1 = [1, 2, 3];
$ar2 = [4, 5];
$ar3 = [6, 7, 8];

$ar4 = ['f' => 1, 's' => 2];
$ar5 = ['t' => 1, 'f' => 4, 'fi' => 5];

$a = $ar4 + $ar5;
$b = array_diff_assoc($ar4, $ar5);
$c = array_diff_assoc($ar5, $ar4);
// $a = $ar1 + $ar2;
// $b = $ar2 + $ar3;
// $c = $ar1 + $ar2 + $ar3;

var_dump($a);

var_dump($b);

var_dump($c);