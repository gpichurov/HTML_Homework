<?php

// 		������ 6:
// �������� 3 ����� �� ��������� - �1, �2 � �3. ��������� ����������� ��
// ����, �� �1 �� ��� ���������� �� �2, �2 �� ��� ���������� �� �3, � �3
// �� ��� ������� �������� �� �1.

require_once 'readline.php';

$a1 = readline('A1:', PHP_EOL);

$a2 = readline('A2:', PHP_EOL);

$a3 = readline('A3:', PHP_EOL);

$new = $a1;

$a1 = $a2;

$a2 = $a3;

$a3 = $new;

echo "a1 = $a1", PHP_EOL;

echo "a2 = $a2", PHP_EOL;

echo "a3 = $a3", PHP_EOL;