<?php

// Задача 5:
// Да се състави програма, при която предварително са въведени
// естествени числа в двумерен масив 4*4 елемента.
// Програмата да извежда резултат от проверката какво е съотношението
// на най-голямата сума по редове спрямо най-голямата сума по колони.
// Пример:
// 1,2,3,4
// 5,6,7,8
// 9,10,11,12
// 13,14,15,16
// Изход:
// най-голяма сума по редове 58
// най-голяма сума по колони 40
// Максималната сума по редове е > от максималната сума по колони

$array = array(
		array(1, 2, 3, 4),
		array(5, 6, 7, 8),
		array(9, 10, 11, 12),
		array(13, 14, 15, 16),
);

$maxRowSum = 0;
$maxColSum = 0;
$curRowSum = 0;
$curColSum = 0;

for ($i = 0; $i < count($array); $i++) {
	for ($j = 0; $j < count($array); $j++) {
		$curRowSum += $array[$i][$j];
		$curColSum += $array[$j][$i];
	}
	if ($curRowSum > $maxRowSum) {
		$maxRowSum = $curRowSum;
	}
	if ($curColSum > $maxColSum) {
		$maxColSum = $curColSum;
	}
	$curRowSum = 0;
	$curColSum = 0;
}

$result = 0;
if ($maxRowSum > $maxColSum) {
	$result = '>';
}
if ($maxRowSum < $maxColSum) {
	$result = '<';
}
if ($maxRowSum == $maxColSum) {
	$result = '=';
}
echo "Най-голяма сума по редове е: $maxRowSum.", PHP_EOL;
echo "Най-голяма сума по колони е: $maxColSum.", PHP_EOL;
echo "Максималната сума по редове е $result от максималната сума по колони.";

