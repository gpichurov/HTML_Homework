<?php

class User {
	public $id;
	
	public $username;
	
	public $password;
}

include 'orm/config.php';
try {
	$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION	
	]);
	
	
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	// $sth
	$statement = $pdo->prepare('SELECT * FROM users');
	
	$statement->execute();
	
	//$users = $statement->fetch(PDO::FETCH_ASSOC);
	
	$users = $statement->fetchAll(PDO::FETCH_CLASS, 'User');
	
	var_dump($statement->rowCount(), $users);
	
	echo 'Done', PHP_EOL;
	
} catch (PDOException $e) {
	var_dump($e->getMessage());
}