<?php

// ������ 13:
// �� �� ������� ��������, ���� ����� �� ������� ����� � �� ���������
// ���� ����� � ������� ������ �������.
// ����������, ���� �����, �� ��������� �������������� ������ �����
// �� ���������� ���������� ����� � 2-���� ������ �������.
// ������: 99
// �����: 1100011

require_once 'readline.php';

$n = readline('�������� ���������� �����: ');
$number = $n;
$arrayN = [];
$arrayNum = [];
$arrayAllNum = [];

do {
	$arrayN[] = $number % 2;
	$number = floor($number / 2);
} while ($number > 0);

for ($j = 0; $j < floor(count($arrayN) / 2); $j++) {
	$temp = $arrayN[$j];
	$arrayN[$j] = $arrayN[count($arrayN) - $j -1];
	$arrayN[count($arrayN) - $j -1] = $temp;
}

echo '������� � ������� ������ �������: ', implode($arrayN), PHP_EOL;

for ($i = strlen($n); $i > 0 ; $i--) {
	$num = ($n % pow(10, $i)) / pow(10, $i - 1);
	
	do {
		$arrayNum[] = $num % 2;
		$num = floor($num / 2);
	} while ($num > 0);
	
	for ($k = 0; $k < floor(count($arrayNum) / 2); $k++) {
		$temp = $arrayNum[$k];
		$arrayNum[$k] = $arrayNum[count($arrayNum) - $k -1];
		$arrayNum[count($arrayNum) - $k -1] = $temp;
	}
	
	$arrayAllNum [] = implode($arrayNum);
	$arrayNum = [];
}
echo '������� �� ������� � ������� ������ �������: ', implode(' ', $arrayAllNum);