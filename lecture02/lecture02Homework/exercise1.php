<?php

/*
 * 	������ 1:
 * �� �� ������ �� ����������� �� ������ 3 ����� A, � � � (���� �� �� � 
 * ������� �������) �� ���������.
 * �� �� ������ ��������� ��������� �� ���� ���� C � ����� A � B.
 */

require_once 'readline.php';

$a = readline('A:', PHP_EOL);

$b = readline('B:', PHP_EOL);

$c = readline('C:', PHP_EOL);

if (($a < $c) && ($b > $c)){
	echo "������� $c � ����� $a � $b", PHP_EOL;
}
else{
	echo "������� $c �� � ����� $a � $b", PHP_EOL;
}