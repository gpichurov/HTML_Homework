<?php

// Задача 4:
// Да се състави програма, която по даден масив, който е сортиран във
// възходящ ред и даден елемент вмъква елемент на правилното му
// място. Като резултат да се получи нов масив и да се изведе.
// Пример:
// 1 3 5 7 9 11 45
// 6
// Изход:
// 1 3 5 6 7 9 11 45

$array = array(1, 3, 5, 7, 9, 11, 45);
$n = 6;
$arrayNew = [];

for ($i = 0; $i < count($array); $i++){
	
	if ($i + 1 != count($array)){
		if (($n > $array[$i] && $n < $array[$i + 1])) {
			$arrayNew[] = $array[$i];
			$arrayNew[] = $n;
			continue;
		}
	}
	
	if ($i == 0 && $n < $array[$i]) {
		$arrayNew[] = $n;
		$arrayNew[] = $array[$i];
		continue;
	}
	
	if (($n > $array[$i]) && ($i + 1 == count($array))) {
		$arrayNew[] = $array[$i];
		$arrayNew[] = $n;
		continue;
	}
	$arrayNew[] = $array[$i];
}

print_r($arrayNew);
