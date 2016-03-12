<?php
$fp = @fopen('files/demo.txt', 'r');
$string = fread($fp, 2);
fclose($fp);

var_dump($string);