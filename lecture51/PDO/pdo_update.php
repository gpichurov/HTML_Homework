<?php
require_once 'orm/Db.php';
require_once 'orm/config.php';


//Db::query('UPDATE users SET username="Gergana" WHERE username="Mariana"');

// Db::query('UPDATE users SET username=? WHERE username=?', ['Petrana', 'Gergana']);
/* 
$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$sth = $pdo->prepare('UPDATE users SET username=:to_name WHERE username=:from_name');
$sth->execute([
		':to_name' => 'Gichka', ':from_name' => 'Petrana'
]); */


/* Db::query('UPDATE users SET username=:to_name WHERE username=:from_name', [
		':to_name' => 'Gichka', ':from_name' => 'Petrana'
]); */