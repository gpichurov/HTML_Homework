<?php

// ������ 4:
// �� �� ������� ����� � �� �� �������� ���� � ���������.
// �������� ������ �� ���������:
// [3 7 7 3]
// [4]
// [1 55 1]
// [6 27 -1 5 7 7 5 -1 27 6]

require_once 'readline.php';

$array = [];
$result = '��������� �.';

do {
	$element = readline('�������� ������� ' . count($array) . ' �� ������: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');

for ($i = 0; $i < floor(count($array) / 2); $i++) {
	if ($array[$i] != $array[count($array) - $i - 1]) {
		$result = '�� � ���������.';
		break;
	}
}

echo $result;