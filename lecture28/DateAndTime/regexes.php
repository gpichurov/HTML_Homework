<?php

$text = 'Сержант Иванов на магистрала 1234 в 1400 задържа автомобил с регистрационен номер X 0987 AX';
preg_match('#([a-z]{1,2})\s(\d{4})\s([a-z]{2})#i', $text, $matches);

var_dump($matches);

$id = 'element-id-12';