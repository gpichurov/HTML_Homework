<?php

//insert into users (name , password) values ('Test1', 'Test1'), ('Test2', 'Test2'), ('Test3', 'Test3');
//
//select * from users;
//
//delete from users where id = 5;
//
//update users set name = 'Madona' where id = 6;

$dsn = 'mysql:host=localhost;dbname=php_test_db';
$user = 'root';
$pass = '';

$pdo = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

//$statement = $pdo->prepare('select * from users');

//$statement->execute();

//var_dump($statement->fetch(PDO::FETCH_ASSOC));
//var_dump($statement->fetchAll(PDO::FETCH_ASSOC));
//var_dump($statement->fetchColumn(0));

//$statement = $pdo->prepare('insert into users (name , password) values (\'John\', \'Dow\')');
//$statement->execute();
//var_dump($pdo->lastInsertId());

$statement = $pdo->prepare('UPDATE users SET name="Sancho" where name = :name ');
$statement->execute(['name' => 'Madona']);
var_dump($statement->rowCount());