<?php

// ������ 15: �� �� ������� ��������, ����� �� ������� ������ �� ������
// ����� �� 1 �� �������� ����� N.
// ������: 5
// �����: 15
// ����������� ����� do-while.

require_once 'readline.php';

$n = readline('�������� ����� N: ', PHP_EOL);

$sum = 0;
$min = min($n, 1);
$max = max($n, 1);

do {
	$sum += $min;
	$min++;
} while ($min <= $max);

echo $sum;