<?php

// Задача 7:
// Да се състави програма, която чете набор от думи разделени с
// интервал.
// Като резултат да се извеждат броя на въведените думи, както и броя
// знаци в най-дългата дума.
// Пример: asd fg hjkl
// Изход: 3 думи, най-дългата е с 4 символа.

require_once 'readline.php';

$str = readline('Въведете думи разделени с интервал: ');

$array = explode(' ', $str);
$longest = 0;

for ($i = 0; $i < count($array); $i++) {
	if (mb_strlen($array[$i]) > $longest) {
		$longest = mb_strlen($array[$i]);
	}
}

echo count($array) . ' думи, най-дългата е с ' . $longest . ' символа.';