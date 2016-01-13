<?php

// ������ 24:
// ���� ����� X � ���������, a�� �� ���� ������� ������ ����� �
// ����� ������.
// �� �� ������� ��������, ����� ��������� ���� �������� ����� �
// ���������.
// ������ �����: N - ���������� ����� �� ��������� [10 .. 30000].
// ������: 17571
// �����: ������� � ���������
// ����������� ����� do-while.


require_once 'readline.php';

do {
	$num = readline('�������� �����[10 .. 30000]: ', PHP_EOL);
} while ($num < 10 || $num > 30000);

$counter = 1;
$counter2 = 0;
$result = '������� � ���������';

do {
	$o = floor($num / pow(10, $counter + 1));
	$counter++;
} while ($o != 0);

do {
	$n1 = floor(($num % pow(10, $counter)) / pow(10, $counter - 1));
	$n2 = ($num / pow(10, $counter2)) % 10;
	if ($n1 != $n2) {
		$result = '������� �� � ���������';
		break;
	}
	$counter--;
	$counter2++;
} while ( $counter - $counter2 >= 0);

echo $result;