<?php

require_once 'TestClass.php';

$t = new test\TestClass();

var_dump(get_class($t));
var_dump(get_class_methods($t));

var_dump(class_exists("test\\TestClass"));

