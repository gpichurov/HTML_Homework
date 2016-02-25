<?php

use test\TestClass;
require_once 'TestClass.php';

$className = 'test\TestClass';
$obj = new $className;
var_dump($obj);

$fn = function () {
    global $className;
    echo $className;
};

$fn();