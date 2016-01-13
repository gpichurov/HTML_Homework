<!--Задача 3:-->
<!--Създайте HTML страница с PHP скрипт, в който потребителя трябва да въведе стойност-->
<!--в градуси Celsius C и на трябва да получи градуси Fahrenheit F.-->
<!--Използвайте формулата C = ( 5 / 9 ) * (F -32). След това доразширете задачата, като-->
<!--добавите лист, от който потребителя да сам да избере дали да конвертира от C към F-->
<!--или от F към C-->

<?php
require_once '../functions.php';

$temperature = getValue($_POST, 'temperature');
$operation = getValue($_POST, 'operation');
$result = 0;
if ($operation == 2) {
    $result = (5 / 9) * ($temperature - 32);
} else if ($operation == 1) {
    $result = (9 / 5) * $temperature + 32;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task03</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="temperature">Temperature</label>
        <input type="number" id="temperature" name="temperature">
    </div>
    <br>
    <div>
        <label for="operation">Operation</label>
        <select name="operation" id="operation">
            <option value="1">Celsius to Fahrenheit</option>
            <option value="2">Fahrenheit to Celsius</option>
        </select>
    </div>
    <br>
    <div>
        <button type="submit">Submit</button>
    </div>
    <br>
    <div>
        <label for="result">Result</label>
        <input type="text" id="result" name="result" value="<?= "$result" ?>">
    </div>
</form>
</body>
</html

