<?php
use HttpStub\Storage\FileStorage;
require_once __DIR__ . '/config.php';
require_once 'functions.php';

$storage = new FileStorage('blogs');

$key = getValue($_GET, 'key', 0);
var_dump($key);
$data = $storage->read($key);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Read</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
</head>
<body class="container-fluid">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="blogs.php">
                <img class="img-responsive" style="width: 100px" src="pictures/logo.png" alt="">
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="form.php">Create New</a></li>
        </ul>
    </div>
</nav>
<main class="panel">
    <div class="panel-heading">
        <h1 class="text-center"><?= $data['title'] ?></h1>
    </div>
    <div class="panel-body">
        <?= $data['text'] ?>
    </div>
    <div class="panel-footer">
        <p><?= $data['date'] ?></p>
    </div>
</main>
</body>
</html>