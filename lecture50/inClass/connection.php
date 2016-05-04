<?php
include 'config.php';

try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]);

    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $sql = 'SELECT * FROM users WHERE id =' . $id;
    $users = $pdo->exec('SELECT * FROM users');
    var_dump($users);
    echo 'Done', PHP_EOL;

} catch (PDOException $e) {
    var_dump($e->getMessage());
}