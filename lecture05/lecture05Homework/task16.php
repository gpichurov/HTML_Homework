<?php

// ������ 16:
// �� �� ������� ��������, ���� ����� ������������� �������� 10
// ������ ����� �� ��������� �� ���������� �� ������� �����:
// 1. ������� �������������� �����.
// 2. ������ �������� ��� �������� ��-����� �� -0.231 �� ������� ���
// ������ �� �������� �� ������� �� + ������� 41.25, � ������ ��������
// �������� �� ������� � �������������� ����� ����� ������� �
// �������� ������� �����
// 3. �� �� ������� ���������� �� �������� � ��������������� �����.
// 4. �� �� ������� �������� �������� �� ������ �������� �� ������
// ������, ����� �� �������� �� 0.
// ������: -1.12, -2.43, 3.1, 4.2, 0, 6.4, - 7.5, 8.6, 9.1, -4
// �����: 42.25, 45.25, 9.3, 16.8, 0, 38.4, 90.25, 68.8, 81.9,141.25

require_once 'readline.php';

$array = [];
$arrayNew = [];

do {
	$array[] = readline('�������� ������ �����: ' . PHP_EOL);
} while (count($array) < 10);

echo implode(', ', $array), PHP_EOL;

foreach ($array as $key => $value) {
	if ($value < -0.231) {
		$arrayNew[] = pow($key, 2) + 41.25;
	}
	else {
		$arrayNew[] = $value * ($key + 1);
	}
}

echo implode(', ', $arrayNew), PHP_EOL;

$sum = 0;
$counter = 0;

for ($i = 0; $i < count($arrayNew); $i++) {
	$sum += $arrayNew[$i];
	if ($arrayNew[$i] === 0) {
		$counter++;
	}
}

$average = $sum / (count($arrayNew) - $counter);

echo '�������� �������� �� ������ �������� �� ������ ������, ����� �� �������� �� 0 �: ' . $average; 