<?php

// ������ 7: ���������� �� 3, �� �� ������� �� ������ ������� n
// ����� ����� �� ����� �� 3. ������� �� �� ��������� ��� �������.

require_once 'readline.php';

$n = readline('���� �����: ', PHP_EOL);

if ($n > 0) {
	echo 3;
}

$counter = 2;

while ($counter <= $n) {
	echo ', ' . 3 * $counter;
	$counter++;
}