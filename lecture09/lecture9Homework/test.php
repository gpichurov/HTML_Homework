<?php

$n = [1, 2, 3, 4];

$len = count($n) - 1;

function maxnum($n, $len) {
	if ($len == 0){
		return 0;
	} 
	return max($n[$len], maxnum($n, $len - 1));
}
echo maxnum($n, $len);

function maxindex($n, $cnt = 0){
	if (isset($n)) {
		return -1;
	}
	if ($cnt == count($n) - 1) {
		return $cnt;
	}
	$index = maxindex($n, $cnt + 1);
	return $n[$cnt] > $n[$index] ? $cnt : $index;
}
echo maxindex($n);

function rev($n, $cnt = 0, $reva = []) {
	if ($cnt == count($n)) {
		return $reva;
	}
	$reva[] = $n[count($n) - 1 - $cnt];
	return rev($n, $cnt + 1, $reva);
}
print_r(rev($n));
sort($n);
print_r($n);