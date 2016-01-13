<?php

// Задача 2:
// Да се състави програма, чрез която от клавиатурата се въвеждат
// последователно две думи с дължина 10-20 знака.
// Програмата да размени първите им 5 знака и да изведе дължината на
// по-дългата, както и новото им съдържание.
// Пример: uchilishe uchenik
// Изход: 9 uchenishe

require_once 'readline.php';

do {
	$str = readline('Въведете две думи 10-20 знака: ');
} while (mb_strlen($str) > 20 || mb_strlen($str) < 10);

$array = explode(' ', $str);

for ($i = 0; $i < 5; $i ++) {
	$temp = $array[0]{$i};
	$array[0]{$i} = $array[1]{$i};
	$array[1]{$i} = $temp;
}

echo mb_strlen($array[0]) < mb_strlen($array[1]) ? mb_strlen($array[1]) . " $array[1]" : mb_strlen($array[0]) . " $array[0]";