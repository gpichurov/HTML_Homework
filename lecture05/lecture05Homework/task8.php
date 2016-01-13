<?php

// ������ 8:
// �������� ��������, ����� ������ � ������� ���-������� ������ ��
// ������� ������� �������� � ����� �����.

require_once 'readline.php';

$array = [];

do {
	$element = readline('�������� ������� ' . count($array) . ' �� ������: ' . PHP_EOL);
	if ($element !== '') {
		$array[] = $element;
	}
} while ($element !== '');

$currCounter = 1;
$maxCounter = 1;
$currNum = $array[0];
$maxNum = $array[0];

for ($i = 0; $i < count($array) - 1; $i++) {
	for ($j = $i + 1; $j < count($array); $j++) {
		if ($array[$i] === $array[$j]) {
			$currCounter++;
			$currNum = $array[$i];
		}
		else {
			break;
		}
	}
	if ($currCounter > $maxCounter) {
		$maxCounter = $currCounter;
		$maxNum = $currNum;
	}
	$currCounter = 1;
}

echo '������������ ������ �: ';
while ($maxCounter > 0) {
	echo "$maxNum ";
	$maxCounter--;
}