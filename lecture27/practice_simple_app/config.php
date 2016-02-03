<?php

use HttpStub\Settings;
define('DATA_PATH', __DIR__ . '/.data');
define('PHP_SELF', basename($_SERVER['PHP_SELF']));

if (!is_dir(DATA_PATH)) {
	mkdir(DATA_PATH);
}

require_once __DIR__ .'/vendor/autoload.php';
Settings::set(Settings::PATH, DATA_PATH);
