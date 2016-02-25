<?php

$flag = FILE_APPEND;

file_put_contents('files/demo.txt', 'Test1' . PHP_EOL, $flag);