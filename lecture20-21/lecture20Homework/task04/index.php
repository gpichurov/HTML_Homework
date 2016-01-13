<!--Задача 4:-->
<!--Създайте HTML страница с PHP скрипт, вкойто потребителя трябва да въведете 10-->
<!--числа. След това ги сложете в array,сортирайте ги и ги изпишете сортирани.Намерете-->
<!--най-малкото и най-голямото число и ги изпишете.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task04</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="number1">Number 1</label>
        <input type="number" id="number1" name="number1">
    </div>
    <br>
    <div>
        <label for="number2">Number 2</label>
        <input type="number" id="number2" name="number2">
    </div>
    <br>
    <div>
        <label for="number3">Number 3</label>
        <input type="number" id="number3" name="number3">
    </div>
    <br>
    <div>
        <label for="number4">Number 4</label>
        <input type="number" id="number4" name="number4">
    </div>
    <br>
    <div>
        <label for="number5">Number 5</label>
        <input type="number" id="number5" name="number5">
    </div>
    <br>
    <div>
        <label for="number6">Number 6</label>
        <input type="number" id="number6" name="number6">
    </div>
    <br>
    <div>
        <label for="number7">Number 7</label>
        <input type="number" id="number7" name="number7">
    </div>
    <br>
    <div>
        <label for="number8">Number 8</label>
        <input type="number" id="number8" name="number8">
    </div>
    <br>
    <div>
        <label for="number9">Number 9</label>
        <input type="number" id="number9" name="number9">
    </div>
    <br>
    <div>
        <label for="number10">Number 10</label>
        <input type="number" id="number10" name="number10">
    </div>
    <br>
    <div>
        <input type="submit">
    </div>
</form>
</body>
</html
<?php
require_once '../functions.php';
if (!empty($_POST)){
    $array = array_filter($_POST);
    sort($array);
    var_dump($array);
    echo 'min = ' . min($array) . PHP_EOL . 'max = ' . max($array);
}
?>