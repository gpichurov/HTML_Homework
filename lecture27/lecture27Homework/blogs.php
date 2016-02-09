<?php

use HttpStub\Storage\FileStorage;
require_once __DIR__ . '/config.php';
require_once 'functions.php';

$dataExist = false;

$subjectsStorage = new FileStorage('subjects');
$subjects = $subjectsStorage->readAll();

$storage = new FileStorage('blogs');
$data = $storage->readAll();

krsort($data);

$subject = getValue($_GET, 'subject', 'all');
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
        <h1 class="text-center">BLOGS</h1>
    </div>
    <div class="panel-body">
        <div class=" col-sm-8 col-sm-offset-1 list-group">
            <?php
            foreach ($data as $key => $blog):?>
                <?php if (($subject === 'all') || ($subject === $blog['subject'])):?>
                <a href="read.php?key=<?= $key ?>" class="list-group-item">
                    <h3><?= $blog['title'] ?></h3>
                    <p class=""><?= $blog['subject'] ?></p>
                    <p><?= $blog['date'] ?></p>
                </a>
                <?php
                    $dataExist = true;
                    endif;
                ?>
            <?php endforeach;?>
            <?php if (!$dataExist):?>
                <p><strong>No Data</strong></p>
            <?php endif;?>
        </div>
        <div class="col-sm-2">
            <div class="list-group">
                <a href="blogs.php?subject=all" class="list-group-item">All</a>
                <a href="blogs.php?subject=economy" class="list-group-item">Economy</a>
                <a href="blogs.php?subject=politics" class="list-group-item">Politics</a>
                <a href="blogs.php?subject=sport" class="list-group-item">Sport</a>
                <a href="blogs.php?subject=programing" class="list-group-item">Programing</a>
                <?php
                foreach ($subjects as $key => $subject):?>
                        <a href="blogs.php?subject=<?= $subject['subject'] ?>" class="list-group-item">
                            <?= $subject['subject'] ?></a>
                        </a>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</main>
</body>
</html>