<?php

// ������ 1:
// �� �� ������� ����� � �� �� ������ ���-������� ����� ������ ��
// 3 �� ������.

require_once 'readline.php';

$array = [];
$array2 = [];
$min = '���� ����� ������ �� 3.';

do {
	$element = readline('�������� ������� ' . count($array) . ' �� ������: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');

foreach ($array as $value) {
	if ($value % 3 == 0) {
		$array2[] = $value;
		$min = min($array2);
	}
}

echo '���-������� ����� ������ �� 3 � ', $min;
