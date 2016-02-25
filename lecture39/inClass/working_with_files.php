<?php


$fp = @fopen('files/demo.txt', 'w');
var_dump($fp);

fwrite($fp, "Test\n");

fclose($fp);
var_dump($fp);