<?php

// ������ 2:
// ���� �� ������� ����� �� �� ���������� ���, ���� ���������� ��
// �������� �� ����� ���� �� �����������, � ������� �� �� ����
// ��������, �� � ������� ���. ��������, �� �� ������ ����� �����
// �� ������.

require_once 'readline.php';

$array = [];
$arrayMirror = [];

do {
	$element = readline('�������� ������� ' . count($array) . ' �� ������: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');

for ($i = count($array) - 1; $i >= 0; $i--) {
	$arrayMirror[] = $array[$i];
}

$arrayNew = array_merge($array, $arrayMirror);
print_r($arrayNew);