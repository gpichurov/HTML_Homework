<?php

// ������ 5: �� �� ������� �� ����������� 2 �����. � �� �� �������
// �� ������ ������ ����� �� ��-������� �� ��-��������.

require_once 'readline.php';

$n = readline('�������� ������� �����: ', PHP_EOL);
$m = readline('�������� ������� �����: ', PHP_EOL);

$min = min($n, $m);
$max = max($n, $m);

while ($min <= $max) {
	echo "$min ";
	$min++;
}