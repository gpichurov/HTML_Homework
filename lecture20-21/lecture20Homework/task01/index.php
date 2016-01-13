<!--Задача 1:-->
<!--Създайте HTML страница с PHP скрипт, в който потребителя трябва да въведе 2 числа и-->
<!--да избере от лист каква операция иска да изпълни. След това изведете резултата от-->
<!--неговия избор и въведени стойности. Възможни операции нека да бъдат +, - , *, /.-->
<!--Направете всички възможни проверки за въведените стойности.-->


<?php
    require_once '../functions.php';
    $firstNumber = getValue($_POST, 'firstNumber');
    $secondNumber = getValue($_POST, 'secondNumber');
    $operation = getValue($_POST, 'operation');
    $result = "";
    switch ($operation) {
        case "+":
            $result = $firstNumber + $secondNumber;
            break;
        case "-":
            $result = $firstNumber - $secondNumber;
            break;
        case "*":
            $result = $firstNumber * $secondNumber;
            break;
        case "/":
            if ($secondNumber) {
                $result = $firstNumber / $secondNumber;
            } else if ($secondNumber == 0) {
                $result = "Cannot divide by zero.";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task01</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="firstNumber">First Number</label>
        <input type="number" id="firstNumber" name="firstNumber">
    </div>
    <br>
    <div>
        <label for="secondNumber">Second Number</label>
        <input type="number" id="secondNumber" name="secondNumber">
    </div>
    <br>
    <div>
        <label for="operation">Operation</label>
        <select name="operation" id="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
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
