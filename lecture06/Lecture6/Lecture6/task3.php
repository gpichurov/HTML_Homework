<?php

require_once 'readline.php';

$arr = ['a', 'b', 'v', 'd', 'w', 'e'];

$ch = readline('�������� ������: ');
$result = '�� �� �������.';

foreach ($arr as $index => $value){
	if ($value === $ch){
		$result =  '������� �� � ������: ' . $index;
	}
}

echo $result;