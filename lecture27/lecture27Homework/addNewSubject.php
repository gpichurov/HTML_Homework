<?php

use HttpStub\Storage\FileStorage;
require_once __DIR__ . '/config.php';

$storage = new FileStorage('subjects');
$subject = [];


if(isset($_POST['subject']) && !empty($_POST['subject'])) {
    $subject = $_POST;

    $storage->insert($subject);
}
