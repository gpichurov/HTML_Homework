<?php

// ������ 2:
// �� �������� �������� ������������ ���������������� �� �������� �
// ����� ���������.
// �� �� ������� ��������, ����� ��������� ��� � ���-������� ��������
// � ������������� ������� ����� �� ���������� �����.
// ���������� �� ������� �������� ��� �� ������ � ���-�������
// �������� � ����.
// ������:
// 1 3 3 7 9 9 9 9 11 11 12 14
// �����:
// ���-������� �������� �: 4 ��������
// ���� �� ����������: 3

$array = array(1, 3, 3, 7, 9, 9, 9, 9, 11, 11, 12, 14);

$cnt = 1;
$maxCnt = 0;
$pl = false;
$plCnt = 0;

for ($i = 0; $i < count($array) - 1; $i++) {
	
	for ($j = 1; $j < count($array) - $i - 1; $j++) {
		if ($array[$i] == $array[$j + $i]) {
			$cnt++;
			$pl = true;
		} else {
			break;
		}
	}
	
	$maxCnt = max($cnt, $maxCnt);
	$cnt = 1;
	if ($pl){
		$plCnt++;
		$i += $j - 1;
	}
	$pl = false;
}

echo '���-������� �������� �: ', $maxCnt, ' ��������', PHP_EOL;
echo '���� �� ����������: ', $plCnt;