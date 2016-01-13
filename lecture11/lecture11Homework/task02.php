<?php

// ������ 2:
// ����������� ����������� �� ������ �� �����
// (���������) �������� ��������, ����� �� ������ k-��� ���-
// ����� ������� � �����.
// ������ :
// ����� [5, 8, 73, 0, 43, 3424, 78, 98], k = 3
// ����� : 78
// ����� [5, 8, 73, 0, 43, 3424, 78, 98], k = 1
// ����� :  3424

$array = [5, 8, 73, 0, 43, 3424, 78, 98];
$k = 5;
function partition(&$a, $left, $right) {
	$k = $left - 1;
	for ($i = $left; $i <= $right; $i++) {
		if ($a[$i] <= $a[$right]) {
			$k++;
			
			$tmp = $a[$i];
			$a[$i] = $a[$k];
			$a[$k] = $tmp;
		}
	}
	return $k;
}

function kMax(&$a, $k) {
	$right = count($a) - 1;
	do {
		$n = partition($a, 0, $right);
		if ($n == count($a) - $k) {
			return $a[$n];
		} else if ($n == $right) {
			$right--;
		}
	} while ($right >= 0);
}
echo kMax($array, $k);
var_dump($array);