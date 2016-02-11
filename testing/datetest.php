<?php
$str = '1212-11-11 11:11:11';
if (DateTime::createFromFormat('Y-m-d H:i:s', $str) !== false) {
    echo 'true';
}

//var_dump($date);