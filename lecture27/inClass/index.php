<?php

use HttpStub\Settings;
use HttpStub\Storage\FileStorage;

require_once __DIR__.'/vendor/autoload.php';

\HttpStub\Settings::set(\HttpStub\Settings::PATH, __DIR__.'/.data' );

$storage = new \HttpStub\Storage\FileStorage('users');

$key = $storage -> insert([
    'full_name' => 'Test Test',
    'email' => 'Test.test@test.com',
]);
var_dump($storage->read($key));