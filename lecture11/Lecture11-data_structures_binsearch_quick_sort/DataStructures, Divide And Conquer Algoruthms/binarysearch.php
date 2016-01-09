<?php

/**
 * 
 * @param unknown $array
 * @param unknown $search
 * @param unknown $from
 * @param unknown $to
 * @return int $result The index of the $search in the array
 * or -1 if not found 
 */
function binary_search($array, $search, $from, $to) {
	
	if ($from > $to) {
		return -1;
	}
	
	$middle = (int) (($from + $to) / 2);
	
	if ($search == $array[$middle]) {
		return $middle;
	} else if ($search > $array[$middle]) {
		return binary_search($array, $search, $middle + 1, $to);
	} else {
		return binary_search($array, $search, $from, $middle - 1);
	}
}