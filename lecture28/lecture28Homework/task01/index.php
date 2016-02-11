<?php

require_once '../functions.php';

$data = [];
$errors = [];


if ($_POST) {
    $data = $_POST;

    if (!getValue($data, 'year')) {
        $errors[] = 'Year is required';
    }

    if (!getValue($data, 'month')) {
        $errors[] = 'Month is required';
    }

    if (!getValue($data, 'day')) {
        $errors[] = 'Month is required';
    }

    if (checkdate($data['month'], $data['day'], $data['year'])) {
        $errors[] = 'Date is valid';
    } else {
        $errors[] = 'Date is not valid';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task01</title>
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css">
</head>
<body class="container-fluid">
<main class="panel">
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="post">
            <?php if ($errors):?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $errors)?>
                </div>
            <?php endif;?>
            <div class="form-group">
                <label class="control-label col-sm-1" for="year">Year:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="year" name="year"
                           value="<?= getValue($data, 'year')?>" placeholder="Enter year">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="month">Month:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="month" name="month"
                           value="<?= getValue($data, 'month')?>" placeholder="Enter month">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="day">Day:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="day" name="day"
                           value="<?= getValue($data, 'day')?>" placeholder="Enter day">
                </div>
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