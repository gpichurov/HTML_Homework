<?php

// ������ 12:
// �� �� ������� ��������, ���� ����� �� ������������� �������� 7
// ����� � ��������� ����� �� �������� ������� �� �������� � �������:
// - 0 � 1 ���� ����� ����������;
// - 2 � 3 ���� ��������;
// - 4 � 5 ���� ���������.
// ������: 1,2,3,4,5,6,7
// �����: 2,1,4,3,6,5,7

require_once 'readline.php';

$array = [];

do {
	$array[] = readline('�������� ������� ' . count($array) . ' �� ������: ' . PHP_EOL);
} while (count($array) < 7);

$temp = $array[0];
$array[0] = $array[1];
$array[1] = $temp;

$array[2] = $array[2] + $array[3];
$array[3] = $array[2] - $array[3];
$array[2] = $array[2] - $array[3];

$array[4] = $array[4] * $array[5];
$array[5] = $array[4] / $array[5];
$array[4] = $array[4] / $array[5];

echo implode(', ', $array);
