<?php

// ������ 9:
// �������� ��������, � ����� ����������� ������� �����, ���� �����
// ���������� �� ������ �� ������� � ������� ��� (����� �� � ������ ��
// �� �������� � ������� ���, ��� ����� �� �� ������, ���� ����� �� ��
// �������� � �������� ���). ��������� �� ������ �������� ����� � ����
// ������������ ����� � ����� ��� �� ���������� ���� �����.

require_once 'readline.php';

$array = [];
$arrayMirror = [];

do {
	$element = readline('Enter element ' . count($array) . ' of the array: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');


for ($i = count($array) - 1; $i >= 0; $i--) {
	$arrayMirror[] = $array[$i];
}

print_r($arrayMirror); // � ������������ �����



for ($j = 0; $j < floor(count($array) / 2); $j++) {
	$temp = $array[$j];
	$array[$j] = $array[count($array) - $j -1];
	$array[count($array) - $j -1] = $temp;
}

print_r($array);  // ��� ������������ �����
