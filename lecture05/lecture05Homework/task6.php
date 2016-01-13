<?php

// ������ 6:
// �������� ��������, ����� ����� ���� 2 ������ � ����� �������
// ��������� ���� �� �������, � ���� �� � ������� ������.

require_once 'readline.php';

$array1 = [];
$array2 = [];
$result1 = '�������� �� �������.';
$result2 = '�������� �� � ������� �������.';

do {
	$element1 = readline('�������� ������� ' . count($array1) . ' �� ������ �����: ' . PHP_EOL);
	if ($element1 !== '') {
		$array1[] = $element1;
	}
} while ($element1 !== '');

do {
	$element2 = readline('�������� ������� ' . count($array2) . ' �� ������ �����: ' . PHP_EOL);
	if ($element2 !== '') {
		$array2[] = $element2;
	}
} while ($element2 !== '');

if ($array1 !== $array2) {
	$result1 = '�������� �� ��������.';
}

if (count($array1) != count($array2)) {
	$result2 = '�������� �� � �������� �������.';
}

echo $result1, PHP_EOL, $result2;