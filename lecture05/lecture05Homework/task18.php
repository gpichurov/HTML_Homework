<?php

// ������ 18:
// ������ �� ��� ��������� ������ � ���������� �����.
// �� �� ������� ��������, ����� �������� ������ ����� � �������
// ������� �� ����� ������ � ������� � ����� �����, ��-�������� ��
// ����� �����.
// �� �� ������ ������������ � �� ����� ������
// ������:
// 18,19,32,1,3, 4, 5, 6, 7, 8
// 1, 2, 3,4,5,16,17,18,27,11
// �����:
// 18,19,32 ,4,5,16,17,18,27,11

require_once 'readline.php';

$array1 = [];
$array2 = [];
$array3 = [];

do {
	$element1 = readline('�������� ������� ' . count($array1) . ' �� ������ �����: ' . PHP_EOL);
	if ($element1 !== '') {
		$array1[] = $element1;
	}
} while ($element1 !== '');

do {
	$array2[] = readline('�������� ������� ' . count($array2) . ' �� ������ �����: ' . PHP_EOL);
} while (count($array2) < count($array1));

for ($i = 0; $i < count($array1); $i++) {
	$array3[] = max($array1[$i], $array2[$i]);
}

echo implode(', ', $array1), PHP_EOL;
echo implode(', ', $array2), PHP_EOL;
echo implode(', ', $array3);