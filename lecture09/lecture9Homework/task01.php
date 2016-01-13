<?php

// ������ 1:
// �� �� ������� ��������, ����� ��������� N-���� ����� �� ��������.
// ������� � ������� ����� �� �������� �� 1-��, ����� �������� � �����
// �� ����� �� ����������� 2.
// ������: 8
// �����: 21
// ������� 5 ����� �� �������� �� : 1, 1, 2, 3, 5, 8, 13, 21

require_once 'readline.php';

$n = readline('�������� �����: ');

function  fibo($n) {
	if ( $n == 1 ) {
		return 1;
	}
	if ( $n == 2 ) {
		return 1;
	}
	return (fibo($n - 1) + fibo($n - 2));
}

echo fibo($n), PHP_EOL;

function fibos($n, $m = 1) {
	if ($n < $m)  {
		return;
	}
	echo fibo($m), ' ';
	return fibos($n, $m + 1);
}
echo '������� ' . $n . ' ����� �� �������� �� : ';
fibos($n);