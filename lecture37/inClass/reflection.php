<?php

require_once 'Person.php';

$reflectionClass = new ReflectionClass('Person');

var_dump($reflectionClass->getProperties());