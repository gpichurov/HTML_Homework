<?php
require_once 'orm/config.php';

require_once 'orm/Db.php';

/* $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$sth = $pdo->prepare('INSERT INTO users (id, username, password) VALUES(null, :name , :pass)');

$sth->execute([
		':name' => 'Dragan', 
		':pass' => md5('ivan_pass'),
		
]); */

Db::query(
		'INSERT INTO users (id, username, password) VALUES(null, :name , :pass)', 
		[
			':name' => 'Mariana',
			':pass' => md5('maria_pass')
	]);