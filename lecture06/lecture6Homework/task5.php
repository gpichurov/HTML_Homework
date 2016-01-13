<?php

// ������ 5:
// �� �� ������� ��������, ��� ����� ������������� �� ��������
// ���������� ����� � �������� ����� 4*4 ��������.
// ���������� �� ������� �������� �� ���������� ����� � �������������
// �� ���-�������� ���� �� ������ ������ ���-�������� ���� �� ������.
// ������:
// 1,2,3,4
// 5,6,7,8
// 9,10,11,12
// 13,14,15,16
// �����:
// ���-������ ���� �� ������ 58
// ���-������ ���� �� ������ 40
// ������������ ���� �� ������ � > �� ������������ ���� �� ������

$array = array(
		array(1, 2, 3, 4),
		array(5, 6, 7, 8),
		array(9, 10, 11, 12),
		array(13, 14, 15, 16),
);

$maxRowSum = 0;
$maxColSum = 0;
$curRowSum = 0;
$curColSum = 0;

for ($i = 0; $i < count($array); $i++) {
	for ($j = 0; $j < count($array); $j++) {
		$curRowSum += $array[$i][$j];
		$curColSum += $array[$j][$i];
	}
	if ($curRowSum > $maxRowSum) {
		$maxRowSum = $curRowSum;
	}
	if ($curColSum > $maxColSum) {
		$maxColSum = $curColSum;
	}
	$curRowSum = 0;
	$curColSum = 0;
}

$result = 0;
if ($maxRowSum > $maxColSum) {
	$result = '>';
}
if ($maxRowSum < $maxColSum) {
	$result = '<';
}
if ($maxRowSum == $maxColSum) {
	$result = '=';
}
echo "���-������ ���� �� ������ �: $maxRowSum.", PHP_EOL;
echo "���-������ ���� �� ������ �: $maxColSum.", PHP_EOL;
echo "������������ ���� �� ������ � $result �� ������������ ���� �� ������.";

