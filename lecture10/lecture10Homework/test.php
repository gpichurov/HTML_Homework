<?php

// $array = [
// 		[14,15,1,9,5],
// 		[21,12,3,8,17],
// 		[2,7,16,24,10],
// 		[4,27,11,6,19]
// ];
// //echo end($array[0]);
// $stack = [1, 2, 3];
// function push($entry) {
// 	global $stack;

// 	return array_push($stack, $entry);
// }
// echo push(11);
// print_r($stack);



// $arrayNew = [];
// for ($i = 0; $i < count($array); $i++){
// 	for ($j = 0; $j < count($array[$i]); $j++ ){
// 		$arrayNew[] = $array[$i][$j];
// 	}
// }
// for ($h = 0; $h < count($arrayNew); $h++){
// 	for ($g = 0; $g < count($arrayNew); $g++){
// 		if ($arrayNew[$h] < $arrayNew[$g]){
// 		$tmp = $arrayNew[$g];
// 		$arrayNew[$g] = $arrayNew[$h];
// 		$arrayNew[$h] = $tmp;
// 		}
// 	}
// }
// $arrayNew2 = [];
// $count = 0;
// for ($i = 0; $i < count($array); $i++){
// 	for ($j = 0 ; $j < count($array[$i]); $j++){
// 		$arrayNew2[$i][$j] = $arrayNew[$count];
// 		$count++;
// 	}
// }
// print_r($arrayNew2);

// $array = [
// 		[15, 16, 8, 1],
// 		[2, 3, 4, 7],
// 		[9, 11, 19, 6]
// ];
// for ($i = 0; $i < count($array); $i++) {
// 	for ($j = 0; $j < count($array[$i]); $j++) {
// 		for ($k = 0; $k < count($array); $k++) {
// 			for ($l = 0; $l < count($array[$k]); $l++) {
// 				if ($array[$i][$j] < $array[$k][$l]) {
// 					swap($array, $i, $j, $k, $l);
// 				}
// 			}
// 		}
// 	}
// }

// print_r($array);

// function swap(&$array, $i, $j, $k, $l) {
// 	$tmp = $array[$i][$j];
// 	$array[$i][$j] = $array[$k][$l];
// 	$array[$k][$l] = $tmp;
// }

$array = [1, 4, 7, 9, 2, 5, 6];
function par(&$array, $left, $right) {
	
}