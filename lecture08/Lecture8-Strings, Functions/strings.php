<?php

// $strt = 'Test test';
// $result = strstr($strt, 'test1234');

// var_dump($result);

$str = '�� ��� ���';
$result = strpos($str, '�', 9);

if ($result !== false) {
	echo 'The search is at index ', $result;
} else {
	echo 'The search is not found in the string ';
}
