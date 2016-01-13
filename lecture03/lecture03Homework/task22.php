<?php

// ������ 22:
// �� �� ������� ��������, ����� ������� ������� 10 ���-�����
// �����, ����� �� ����� �� 2, 3 ��� �� 5 � ����� �� ��-������ ��
// �������� ���������� �����.
// ������� �� ��������, ������ � ������ ������� �����.
// ������ �����: ����� �� ��������� [1..999]
// ������: 1
// �����: 1:2; 2:3, 3:4, 4:5, 5:6, 6:8, 7:9, 8:10, 9:12, 10:14
// ����������� ����� while.

require_once 'readline.php';

do {
	$n = readline('�������� �����[1..999]: ', PHP_EOL);
} while ($n < 1 ||  $n > 999);

$counter = 1;
$num = 1;

while ($counter <= 10) {
	if ((($n + $num) % 2 == 0) || (($n + $num) % 3 == 0) || (($n + $num) % 5 == 0)) {
		echo $counter, ':', $n + $num;
		
		if ($counter < 10) {
			echo ', ';
		}
		$counter++;
	}
	$num++;
}