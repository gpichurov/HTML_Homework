<?php

class  User
{

}


include 'config.php';

try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]);

    $id = isset($_GET['id']) ? $_GET['id'] : 0;

    $statement = $pdo->prepare('SELECT * FROM users WHERE id = ?');
    $statement->execute([$id]);

    $users = $statement->fetch();
    var_dump($statement->rowCount(PDO::FETCH_ASSOC), $users);

    echo 'Done', PHP_EOL;

} catch (PDOException $e) {
    var_dump($e->getMessage());
}