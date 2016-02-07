<?php
use HttpStub\Storage\FileStorage;
require_once __DIR__ . '/config.php';
require_once 'functions.php';

$blogDate = date("d.m.Y H:i");
$storage = new FileStorage('blogs');
$data = [];

$errors = [];
if ($_POST) {
    $data = $_POST;
    if (!getValue($data, 'title') || mb_strlen(getValue($data, 'title'), 'UTF-8') < 5) {
        $errors[] = 'Title at last 5 characters is required';
    }

    if (!getValue($data, 'text')) {
        $errors[] = 'Text is required';
    }

    if (!$errors) {
        if ($key) {
            $storage->update($key, $data);
        } else {
            $storage->insert($data);
        }

        header('Location: blogs.php');
        die;
    }
}

$data = (array)$data;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Write</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css">
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body class="container-fluid">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="blogs.php">
                <img class="img-responsive" style="width: 100px" src="pictures/logo.png" alt="">
            </a>
        </div>
    </div>
</nav>
<main class="panel">
    <div class="panel-heading">
        <h1 class="text-center">Write your blog</h1>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="post">
            <?php if ($errors):?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $errors)?>
                </div>
            <?php endif;?>
            <div class="form-group">
                <label class="control-label col-sm-1" for="title">Title:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title"
                           value="<?= getValue($data, 'title')?>" placeholder="Enter title">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="text">Text:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="15" id="text" name="text"
                              data-value="<?= getValue($data, 'text')?>"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="subject">Subject:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="subject" id="subject">
                        <option value="economy">Economy</option>
                        <option value="politics">Politics</option>
                        <option value="sport">Sport</option>
                        <option value="programing">Programing</option>
                    </select>
                </div>
            </div>
            <div class="form-group hidden">
                <input type="text" class="form-control" id="date" name="date"
                       value="<?= getValue($data, 'date', $blogDate)?>" >
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-success">Send</button>
                </div>
            </div>
        </form>
    </div>
</main>
</body>
</html>
