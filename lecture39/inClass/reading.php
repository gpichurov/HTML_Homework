<?php

$fp = @fopen('files/demo.txt', 'w');

$string = fread($fp, 1024);
fclose($fp);

var_dump($string);