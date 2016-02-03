<?php

define('DATA_PATH', __DIR__ . '/.data');
define('PHP_SELF', basename($_SERVER, ))

if (!is_dir(DATA_PATH)){
    mkdir(DATA_PATH);
}

require_once __DIR__ . '/vendor/autoload.php';