<?php

// ������ 1:
// �� �� ��������� �� �������� ���-���������� �����
// ������� ������� � �������� �����. �� �� ������� �������,
// ����� �� ����� ����� � ������� �� ������� ���� � ��������, �
// ����� �� ������� ��������. ������������ � ������, �� ������ �
// �������� �� ������ � �� ������.

$array = [
		[1, 3, 5, 7],
		[2, 4, 6, 8],
		[9, 10, 17, 22]
];
$element = 22;

function search($array, $rowMin, $rowMax, $colMin, $colMax, $element) {
	if ($array[$rowMin][$colMin] > $element || $array[$rowMax][$colMax] < $element) {
		return false;
	} 
	if ($array[$rowMin][$colMin] == $element) {
		return 'row = ' . $rowMin . ' col = ' . $colMin;
	}
	if ($array[$rowMax][$colMax] == $element) {
		return 'row = ' . $rowMax . ' col = ' . $colMax;
	}
	
	$rowMid = (int) (($rowMax + $rowMin) / 2);
	$colMid = (int) (($colMax + $colMin) / 2);
	
	if ($array[$rowMid][$colMid] == $element) {
		return 'row = ' . $rowMid . ' col = ' . $colMid;
	} else if ($array[$rowMid][$colMid] < $element) {
		
	}
}
echo search($array, 0, count($array) - 1, 0, count($array[count($array) - 1]), $element);