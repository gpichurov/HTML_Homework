<?php

// ������ 15:
// �� �� ������� ��������, ����� ������� � ��������� ����� ������ �����.
// ���� �����: �������� ������� ����� 3 �������� �����, �����
// ��������� �������� ������� ������������ ���� ����.
// ������: 7.13; 0.2; 4.9; 5.1; 6.34; 1.12
// �����: 5.1; 6.34; 7.13

require_once 'readline.php';

$array = [];
$array2 = [];

do {
	$element = readline('�������� ������� ' . count($array) . ' �� ������: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');

for ($i = 0; $i < 3; $i++) {
	$array2[$i] = max($array);
	foreach ($array as $key => $value) {
		if ($value === max($array)) {
			unset($array[$key]);
			break;
		}
	}
}

echo implode('; ', $array2);
