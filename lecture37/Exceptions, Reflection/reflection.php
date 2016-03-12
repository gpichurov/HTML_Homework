<?php

require_once 'Person.php';

$reflectionClass = new ReflectionClass('Person');

var_dump($reflectionClass->getProperties(), $reflectionClass->getMethods());
/**
 * @var ReflectionMethod $reflectionMethod
 */
foreach ($reflectionClass->getMethods() as $reflectionMethod) {
	var_dump($reflectionMethod->getName());
}


$person = new Person('John', 20);
// {}, new Object()
/* $object = new stdClass();
$object->name = 'Test'; */
$reflectionMethod = new ReflectionMethod('Person', 'getName');

var_dump($reflectionMethod->invoke($person));