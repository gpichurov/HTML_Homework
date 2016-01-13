<?php

// Задача 21:
// Дадено е наредено тесте карти.
// Наредбата по тежест на карта е: 2,3,4,5,6,7,8,9,10, Вале, Дама,
// Поп, Асо.
// Наредбата по цвят на картите е: спатия, каро, купа, пика.
// Да се създаде програма, чрез която се въвежда N - число от
// интервала [1..51] и се извеждат въведения номер карта и
// останалите по-големи карти от тестето.
// Пример: 47.
// Изход: Поп купа, Поп пика, Асо спатия, Асо каро, Асо купа, Асо пика

require_once 'readline.php';

do{
	$n = readline('Въведете число N[1..51]: ', PHP_EOL);
} while ($n < 1 || $n > 51);


for ($n; $n <= 52; $n++){
	
	$boq = $n % 4;
	$karta = ceil($n / 4);
	
		switch ($karta) {
			case 1: echo '2 ';
			break;
			case 2: echo '3 ';
			break;
			case 3: echo '4 ';
			break;
			case 4: echo '5 ';
			break;
			case 5: echo '6 ';
			break;
			case 6: echo '7 ';
			break;
			case 7: echo '8 ';
			break;
			case 8: echo '9 ';
			break;
			case 9: echo '10 ';
			break;
			case 10: echo 'Вале ';
			break;
			case 11: echo 'Дама ';
			break;
			case 12: echo 'Поп ';
			break;
			case 13: echo 'Асо ';
			break;
		}
		
		switch ($boq) {
			case 1: echo 'спатия';
			break;
			case 2: echo 'каро';
			break;
			case 3: echo 'купа';
			break;
			case 0: echo 'пика';
			break;
		}	
		
		if ($n < 52) {
			echo ', ';
		}
}



