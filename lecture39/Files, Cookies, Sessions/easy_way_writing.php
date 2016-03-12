<?php
$flag = FILE_APPEND;

// fopen() fwrite() fclose()
// $flag = FILE_APPEND -> fopen('file', 'a') fwrite() fclose()
file_put_contents('files/demo.txt', 'Test 1' . PHP_EOL, $flag);