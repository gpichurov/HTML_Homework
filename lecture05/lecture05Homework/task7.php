<?php

// ������ 7:
// �������� ��������, ����� ����� ���� ����� � ����� ������� ���
// ����� ��� ����� ������ �� ������� �����: ���������� �� �����
// ������� �� ������ ����� �� � ����� �� ����� �� ���������� �
// ���������� ������� �� ���������� ������� �� ������ �����.
// �� �� ������ ��������� �����.

require_once 'readline.php';

$array = [];
$arrayNew = [];

do {
	$element = readline('�������� ������� ' . count($array) . ' �� ������: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');

for ($i = 0; $i < count($array); $i++) {
	if (!isset($array[$i - 1])) {
		$arrayNew[] = $array[$i + 1];
	}
	if (!isset($array[$i + 1])) {
		$arrayNew[] = $array[$i - 1];
	}
	if (isset($array[$i - 1]) && isset($array[$i + 1])) {
		$arrayNew[] = $array[$i - 1] + $array [$i + 1];
	}
}

print_r($arrayNew);