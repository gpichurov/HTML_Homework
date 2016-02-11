<?php

require_once '../functions.php';

$data = [];

if ($_POST) {
    $data = $_POST;

    $dateInterval = new DateInterval('P' . $data['yearAdd'] . 'YP' . $data['monthAdd'] . 'MP' .
                                         $data['dayAdd'] . 'DPT' . $data['hoursAdd'] . 'HPT' .
                                        $data['minutesAdd'] . 'MPT' . $data['secondsAdd'] . 'S');

    $dateTime = new DateTime($data['year'] . '-' . $data['month'] . '-' . $data['day'] . ' ' .
                            $data['hours'] . ':' . $data['minutes'] . ':' . $data['seconds']);

    $data['result'] = $dateTime->add($dateInterval);
    $data['result'] = $data['result']->format($data['format']);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task02</title>
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css">
</head>
<body class="container-fluid">
<main class="panel">
    <div class="page-header">
        <div class="col-sm-offset-1 col-sm-5">
            <h3>Date</h3>
        </div>
        <div class="col-sm-6">
            <h3>Add</h3>
        </div>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="post">
            <div class="form-group">
                <label class="control-label col-sm-1" for="year">Year:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="year" name="year"
                           value="<?= getValue($data, 'year')?>" placeholder="Enter year">
                </div>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="yearAdd" name="yearAdd"
                           value="<?= getValue($data, 'yearAdd')?>" placeholder="Enter year">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="month">Month:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="month" name="month"
                           value="<?= getValue($data, 'month')?>" placeholder="Enter month">
                </div>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="monthAdd" name="monthAdd"
                           value="<?= getValue($data, 'monthAdd')?>" placeholder="Enter month">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="day">Day:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="day" name="day"
                           value="<?= getValue($data, 'day')?>" placeholder="Enter day">
                </div>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="dayAdd" name="dayAdd"
                           value="<?= getValue($data, 'dayAdd')?>" placeholder="Enter day">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="hours">Hours:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="hours" name="hours"
                           value="<?= getValue($data, 'hours')?>" placeholder="Enter hours">
                </div>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="hoursAdd" name="hoursAdd"
                           value="<?= getValue($data, 'hoursAdd')?>" placeholder="Enter hours">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="minutes">Minutes:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="minutes" name="minutes"
                           value="<?= getValue($data, 'minutes')?>" placeholder="Enter minutes">
                </div>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="minutesAdd" name="minutesAdd"
                           value="<?= getValue($data, 'minutesAdd')?>" placeholder="Enter minutes">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="seconds">Seconds:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="seconds" name="seconds"
                           value="<?= getValue($data, 'seconds')?>" placeholder="Enter seconds">
                </div>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="secondsAdd" name="secondsAdd"
                           value="<?= getValue($data, 'secondsAdd')?>" placeholder="Enter seconds">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="format">Format:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="format" name="format"
                           value="<?= getValue($data, 'format')?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-10">
                    <button type="submit" class="btn btn-success">Send</button>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="result">Result:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="result" name="result"
                           value="<?= getValue($data, 'result')?>">
                </div>
            </div>
        </form>
    </div>
</main>
</body>
</html>