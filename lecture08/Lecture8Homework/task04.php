<?php

// Задача 4:
// Да се състави програма, чрез която по въведени трите имена на двама
// човека разделени със запетая, се извежда чие име има по-голям сбор
// от ASCII кодовете на съставящите името букви.
// Пример: Anna Dosewa Asenowa, Iwo Peew Peew
// Изход: Anna Dosewa Asenowa

require_once 'readline.php';

$str = readline('Въведете трите имена на двама човека разделени със запетая: ');

$array = explode(',', $str);
$sum1 = 0;
$sum2 = 0;

for ($i = 0; $i < strlen($array[0]); $i++) {
	if ($array[0]{$i} !== ' ') {
		$sum1 += ord($array[0]{$i});
	}
}

for ($j = 0; $j < strlen($array[1]); $j++) {
	if ($array[1]{$j} !== ' ') {
		$sum2 += ord($array[1]{$j});
	}
}

echo $sum1 > $sum2 ? $array[0] : $array[1];