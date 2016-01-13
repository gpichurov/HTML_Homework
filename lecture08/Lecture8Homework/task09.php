<?php

// Задача 9:
// Да се състави програма, чрез която по въведен низ съдържащ букви,
// цифри, знак минус '-' се извежда сборът на въведените числа като се
// отчита знакът '-' пред съответното число.
// Вход: asd-12sdf45-56asdf100
// Изход:
// -12
// 45
// -56
// 100
// Сума = 77

require_once 'readline.php';

$str = readline("Въведете низ съдържащ букви, цифри и знак минус '-' : ");
$result = '';
$sum = 0;

for ($i = 0; $i < strlen($str); $i++) {
	
	if ((ord($str{$i}) >= 48 && ord($str{$i}) <= 57) || 
	(ord($str{$i}) == 45 && (ord($str{$i + 1}) >= 48 && ord($str{$i + 1}) <= 57))) {
		
		$result = $result . $str{$i};
		
		for ($j = 1; $j + $i < strlen($str); $j++) {
			
			if (ord($str{$i + $j}) >= 48 && ord($str{$i + $j}) <= 57){
				$result = $result . $str{$i + $j};
			} else {
				break;
			}
		}
		$i += $j - 1;
		echo $result, PHP_EOL;
		$sum += $result;
		$result = '';
	}
}
echo 'Сума = ', $sum;