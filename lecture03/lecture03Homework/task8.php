<?php

// ������8: �� �������� ����� n, �� �� ������ �� ������ ������� ��
// ������� �����:
// n: 1    n: 2    n:3
// 0       11      222
//         33      444
//                 666

require_once 'readline.php';

$n = readline('�������� �����: ');

for ($i = 0; $i < $n; $i++) {
	for ($j = 0; $j < $n; $j++) {
		echo $n - 1 + 2 * $i;
	}
	echo PHP_EOL;
}