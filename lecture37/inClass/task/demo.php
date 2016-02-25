<?php

require_once 'autoload.php';
class  SameClassException extends Exception
{

}

$a = [
    new Test(),
    new Test(),
    new Test(),
    new NotTest(),
    new Test(),
    new Test()
];

function test($a){
    $testReflection = new ReflectionClass('Test');

    $haveDiff = false;

    for ($i = 0; $i < count($a); $i++) {
        if (!is_a($a[$i], 'Test')) {
            echo 'Index of different is ' . $i . PHP_EOL;
        }
        $objName = get_class($a[$i]);
        $reflection =  new ReflectionClass($objName);
        if (!($testReflection->getMethods() == $reflection->getMethods())) {
            $haveDiff = true;
            var_dump(array_diff($reflection->getMethods(), $testReflection->getMethods()));
        }
    }

    if (!$haveDiff) {
        throw new SameClassException('All are same');
    }
}

try {
    test($a);
} catch(SameClassException $ex) {
    echo 'My custom exception caught!!' . PHP_EOL;
} finally {
    $a = [];
}

var_dump($a);
