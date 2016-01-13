<?php

// Задача 1:
// Да се състави програма, чрез която се въвеждат два низа съдържащи
// до 40 главни и малки букви.
// Като резултат на екрана да се извеждат низовете само с главни и само
// с малки букви.
// Пример: Abcd Efgh
// Изход: ABCD abcd EFGH efg

require_once 'readline.php';

do {
	$str = readline('Въведете два низа: ');
} while (mb_strlen($str) > 40);

$array = explode(' ', $str);

for ($i = 0; $i < count($array); $i++){
	echo mb_strtoupper($array[$i]) . ' ' . mb_strtolower($array[$i]) . ' ';
}