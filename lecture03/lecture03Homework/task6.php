<?php

// ������ 6: �� �� ������� ����� �� ������(���������) � �� ��
// ������ ����� �� ������ ����� ����� 1 � ���������� �����.

require_once 'readline.php';

$n = readline('�������� �����: ', PHP_EOL);

$sum = 0;
$min = min($n, 1);
$max = max($n, 1);

while ($min <= $max) {
	$sum += $min;
	$min++;
}
echo " ��������� � $sum";