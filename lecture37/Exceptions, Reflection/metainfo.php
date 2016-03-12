<?php

use test\TestClass;
require_once 'TestClass.php';

$t = new TestClass();
var_dump(get_class($t));

var_dump(get_class_methods( "test\TestClass"));
var_dump(class_exists("test\TestClass"));

$className = "test\TestClass";
$object = new $className;

var_dump($object->{'testPublic'}());