<?php
	use HttpStub\Settings;
	use HttpStub\Storage\FileStorage;
	
	require_once __DIR__ . '/vendor/autoload.php';
	
	Settings::set(Settings::PATH, __DIR__ . '/.data');
	
	$storage = new FileStorage('users');
	
	$key = $storage->insert([
		'full_name' => 'Test Test',
		'email' => 'test.test@test.com'	
	]);
	
	var_dump($storage->read($key));
	
	
	
	