<?php

require_once 'readline.php';

$arr = ['a', 'b', 'v', 'd', 'w', 'e'];

$ch = readline('Въведете символ: ');
$result = 'Не се съдържа.';

foreach ($arr as $index => $value){
	if ($value === $ch){
		$result =  'Съдържа се в индекс: ' . $index;
	}
}

echo $result;