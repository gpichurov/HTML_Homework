<?php

// ������ 9: �� �� �������� 2 ����� �� ������������ � � �.
// �� �� ������� ������ ����� �� � �� � �� ������ 2(��������� �
// �������).��� ����� ����� � ������ �� 3, �� �� ������ ��������� ��
// ������� �� �������� �skip 3�.��� ������ �� ������ �������� ����� (���
// ������������) ����� ��-������ �� 200, �� �� �������� �����������.

require_once 'readline.php';

$a = readline('�������� ������� ����� A: ', PHP_EOL);
$b = readline('�������� ������� ����� B: ', PHP_EOL);

$min = min($a, $b);
$max = max($a, $b);
$sum = 0;

while (($min <= $max) && ($sum <= 200)) {
	if ($min % 3 != 0) {
		echo pow($min, 2);
		$sum += pow($min, 2);
	}
	else {
		echo "skip $min";
	}
	$min++;
	if (($min <= $max) && ($sum <= 200)){
		echo ', ';
	}
	
}