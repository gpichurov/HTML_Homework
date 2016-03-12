<?php

$fp = @fopen('files/demo.txt', 'w');
fwrite($fp, "Test\n");
fclose($fp);