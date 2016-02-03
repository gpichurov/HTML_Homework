<?php
use HttpStub\Storage\FileStorage;
require_once __DIR__ . '/config.php';
require_once 'functions.php';


$storage = new FileStorage('users');
$key = getValue($_GET, 'key', 0);
$success = false;
if ($storage->keyExists($key)) {
	$storage->delete($key);
	$success = true;	
}

$message = $success ? 'The record was deleted' : 'Record not found';
header(sprintf('Location: index.php?message=%s&status=%d', $message, $success));