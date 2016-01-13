<?php

// Задача 11:
// Да се създаде метод, който отпечатва масив в конзолата.

$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

function printArray($array) {
	foreach ($array as $value) {
		echo $value, ' ';
	}
}

printArray($array);