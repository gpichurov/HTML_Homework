<?php

// Задача 24:
// Едно число X е палиндром, aко се чете еднакво отпред назад и
// отзад напред.
// Да се състави програма, която проверява дали въведено число е
// палиндром.
// Входни данни: N - естествено число от интервала [10 .. 30000].
// Пример: 17571
// Изход: числото е палиндром
// Използвайте цикъл do-while.


require_once 'readline.php';

do {
	$num = readline('Въведете число[10 .. 30000]: ', PHP_EOL);
} while ($num < 10 || $num > 30000);

$counter = 1;
$counter2 = 0;
$result = 'числото е палиндром';

do {
	$o = floor($num / pow(10, $counter + 1));
	$counter++;
} while ($o != 0);

do {
	$n1 = floor(($num % pow(10, $counter)) / pow(10, $counter - 1));
	$n2 = ($num / pow(10, $counter2)) % 10;
	if ($n1 != $n2) {
		$result = 'числото не е палиндром';
		break;
	}
	$counter--;
	$counter2++;
} while ( $counter - $counter2 >= 0);

echo $result;