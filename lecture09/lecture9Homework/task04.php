<?php

// ������ 4:
// �� �� ������� ��������, ���� ����� �� �������� ������� � ������
// ����� �� �������� �� ����� ��� ��� �������� ����������������
// (���������� �� �����):
// ������: 1, 9
// �����:
// 1
// 1 2
// 1 2 3
// ... ��
// 1 2 3 4 5 6 7 8 9

require_once 'readline.php';

do {
	$n = readline('�������� ������� �����: ');
} while ($n < 1);

do {
	$m = readline('�������� ������ ����o: ');
} while ($m < 1);

function row($n, $m) {
	if ($n - 1 == $m) {
		return;
	}

	echo $n, ' ';
	return row($n + 1, $m);
}

function tri($n, $m, $l) {
	if ($n - 1 == $m) {
		return;
	}
	row($l, $n);
	echo PHP_EOL;
	return tri($n + 1, $m, $l);
}

tri($n, $m, $n);