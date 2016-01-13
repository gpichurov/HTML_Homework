<?php

// ������ 10:
// �� �� ������� ��������, ���� ����� �� �������� 7 ���� ����� �
// ��������� �����.
// ���������� �� ������ �������, ����� � ���-������ �� ��������
// �������� �� ���������� �����.
// ������: 1,2,3,4,5,6,7
// �����: ������ �������� 4, ���-������ �������� 4

require_once 'readline.php';

$array = [];

do {
	$array[] = readline('�������� ������� ' . count($array) . ' �� ������: ' . PHP_EOL);
} while (count($array) < 7);

$average = array_sum($array) / count($array);

$array2 = [];

for ($i = 0; $i < count($array); $i++) {
	$diff = abs($array[$i] - $average);
	$array2[] = $diff;
}

foreach ($array2 as $key => $value) {
	if ($value === min($array2)) {
		$close = $array[$key];
		break;
	}
}
echo '������ ��������: ' . $average . ', ���-������ ��������: ' . $close. '.';


