<?php

// ������ 3:
// ����� �������� ����� �� �����, ����� ��������� �� ��������
// �������������. �� �� ��������� ������ �� ���������� �� ������,
// ����� � ������������������� �� ���� �����.

$array = array(
		array(48, 72, 13, 14, 15),
		array(21, 22, 53, 24, 75),
		array(31, 57, 33, 34, 35),
		array(41, 95, 43, 44, 45),
		array(59, 52, 53, 54, 55),
		array(61, 69, 63, 64, 65)
);

$sum = 0;

for ($i = 0; $i < count($array); $i++){
	for ($j = 0; $j < count($array[0]); $j++){
		$sum += $array[$i] [$j];
	}
}

echo '������ � ' . $sum . ' � ������������������� � ' . $sum / (count($array[0]) * count($array));