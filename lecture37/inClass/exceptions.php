<?php

class  MyCustomException
{

}

function test($a) {
    if ($a < 0) {
        throw new Exception('We expected the first argument to be positive!');
    }

    if ($a == 0) {
        throw new MyCustomException('Param must be greater than zero!');
    }
}

try {
    test($dsasd);
} catch (MyCustomException $me) {
    echo 'My custom exception caught';
} catch (Exception $exc) {
    var_dump($exc);
    echo 'Exception caught';
} catch (Throwable $t) {
    echo 'Error!!';
}