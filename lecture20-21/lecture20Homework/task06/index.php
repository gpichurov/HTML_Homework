<!--Задача 6:-->
<!--Създайте HTML страница с PHP скрипт, в който потребителя трябва да-->
<!--въведе име, фамилия и да избере дата на раждане (ден, месец,-->
<!--    година). Ако потребителя не е въвел някое поле, нека въведената от-->
<!--него стойност да се запази във формата. -->

<?php
require_once '../functions.php';
$firstName = getValue($_POST, 'firstName');
$lastName = getValue($_POST, 'lastName');
$birthDate = getValue($_POST, 'birthDate');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task06</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name="firstName" value="<?= htmlentities($firstName)?>">
    </div>
    <div>
        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" value="<?= htmlentities($lastName)?>">
    </div>
    <div>
        <label for="birthDate">Birth Date</label>
        <input type="date" id="birthDate" name="birthDate" value="<?= htmlentities($birthDate)?>">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
</body>
</html
