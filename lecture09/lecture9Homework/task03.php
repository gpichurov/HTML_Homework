<?php

// ������ 3:
// �� �� ������� ��������, ����� ��������� ���� �������� ����������
// ����� � ������.
// ������: 101
// �����: ������

require_once 'readline.php';

do {
	$n = readline('�������� ���������o ����o: ');
} while ($n < 1);
	
function simple($n, $m = 2){
	if ($m >= $n){
		return '������';
	}
	if ($n % $m == 0){
		return '�� � ������';
	}
	return simple($n, $m + 1);
}

echo simple($n);