<?php

// ������ 11:
// �� �� ������� ��������, ����� ������� �� ������������ 7 ���� �����
// � ��������� �����
// ���������� �� ������ ������ ����� ������ �� 5, �� �� ������ �� 5.
// ������: -23, -55, 17, 75, 56, 105, 134
// �����: 75,105 2 �����

require_once 'readline.php';

$array = [];
$array2 = [];

do {
	$array[] = readline('�������� ������� ' . count($array) . ' �� ������: ' . PHP_EOL);
} while (count($array) < 7);

for ($i = 0; $i < count($array); $i++) {
	if (($array[$i] % 5 == 0) && ($array[$i] > 5)) {
		$array2[] = $array[$i];
	}
}

$result = implode(', ', $array2);

if (count($array2) == 1){
	echo $result . ' ' . count($array2) . ' �����';
} else {
	echo $result . ' ' . count($array2) . ' �����';
}