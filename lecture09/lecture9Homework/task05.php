<?php

// ������ 5:
// �� �� ������� ��������, ���� ����� �� ������� ���������� ����� N.
// ���������� �� ������� �����, ����� ����� �� �������� � ��� �������
// �� ���������� �����.
// �� �� ������� ��������� ���� ���������� ����� � ���������.
// ������: 12321
// �����: 12321 ��.
// ������: 12578
// �����: 87521 ��.

require_once 'readline.php';

do {
	$n = readline('�������� ���������o ����o: ');
} while ($n < 1);

$len = strlen($n);
$newNum = '';

function num($n, $len, $newNum) {
	if ($len == 0){
		if ($n === $newNum) {
			return $newNum . ' ��.';
		} else {
			return $newNum . ' ��.';
		}	
	}
	$newNum = $newNum . $n{$len - 1}; 
	return num($n, $len - 1, $newNum);
}

echo num($n, $len, $newNum);