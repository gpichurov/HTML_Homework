<?php

//1. Всички думи, в които се съдържа “is”

$text1 = 'Is this miss kiss his sis.';
preg_match_all('#[a-z]*is[a-z]*#', $text1, $matches1);
var_dump($matches1);

//2. Всички думи, които завършват на “ting”

$text2 = 'This sting blink.';
preg_match_all('#[a-z]*ting#i', $text2, $matches2);
var_dump($matches2);