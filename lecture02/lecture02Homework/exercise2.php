<?php

// 		������ 2:
// �������� 2 �������� ����������� ����� �� ���������. ��������
// ������� ����, �������, ������������, ������� �� ������� �
// ����������� ������� � ������� ���������� � ������������ ����
// ���������.

require_once 'readline.php';

$a = readline('A:', PHP_EOL);

$b = readline('B:', PHP_EOL);

echo 'A + B = ' . ($a + $b), PHP_EOL;

echo 'A - B = ' . ($a - $b), PHP_EOL;

echo 'A * B = ' . ($a * $b), PHP_EOL;

echo 'A / B = ' . ($a / $b), PHP_EOL;

echo 'A % B = ' . ($a % $b), PHP_EOL;