<?php
set_error_handler('customErrorHandler');
set_exception_handler('customErrorHandler');

require 'inc.php';
echo 'HTML HTML';
dosmth(1, 2, 3);
outerFunction();

function customErrorHandler($errorCode, $errorMessage, $file, $line, $context) {
    $args = func_get_args();
    if (count($args) == 1) {
        $e = $args[0];
        var_dump($e->getTrace());
        die;
    }
    $trace = debug_backtrace();
    var_dump($trace);
}