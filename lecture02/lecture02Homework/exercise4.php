<?php

// ������ 4:
// �������� 2 �������� ����� �� ��������� � �� ������������ �
// ��������� ���

require_once 'readline.php';

$a = readline('A:', PHP_EOL);

$b = readline('B:', PHP_EOL);

if ($a > $b){
	echo $b . ' ' . $a;
}
else{
	echo $a . ' ' . $b;
}