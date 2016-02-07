<?php
use HttpStub\Storage\FileStorage;
require_once __DIR__ . '/config.php';
require_once 'functions.php';

$input = [];
$storage = new FileStorage('users');
$data = $storage->read('1');
$errors = [];

if ($_POST) {
    $input = $_POST;
    if (!getValue($input, 'username')) {
        $errors[] = 'Username is required';
    }

    if (!getValue($input, 'password')) {
        $errors[] = 'Password is required';
    }

    if ((getValue($input, 'username') !== $data['username']) ||
        (getValue($input, 'password') !== $data['password'])) {
        $errors[] = 'Wrong username or password';
    }

    if (!$errors) {
        header('Location: blogs.php');
        die;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BLOGS</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
</head>
<body class="container-fluid">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#">
                <img class="img-responsive" style="width: 100px" src="pictures/logo.png" alt="">
            </a>
        </div>
    </div>
</nav>
<main class="panel">
    <div class="panel-heading">
        <h1 class="text-center">Login</h1>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="post">
            <div class="form-group">
                <label class="control-label col-sm-1" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="admin"
                           name="username" value="<?= getValue($input, 'username')?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="password">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="admin"
                           name="password" value="<?= getValue($input, 'password')?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-success">Sign Up</button>
                </div>
            </div>
            <?php if ($errors):?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $errors)?>
                </div>
            <?php endif;?>
        </form>
    </div>
</main>
</body>
</html>