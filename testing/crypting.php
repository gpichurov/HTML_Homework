<?php

require_once 'readline.php';

$pass = md5('asdf1234zxc');

$input = readline('Enter password');
if (md5($input) == $pass) {
	echo 'You pass';
} else {
	echo 'You fail';
}