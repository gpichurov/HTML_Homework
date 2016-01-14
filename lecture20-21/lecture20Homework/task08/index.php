<!--Задача 8:-->
<!--Създайте HTML страница с PHP скрипт, в който съдържа HTML форма и-->
<!--показва на екрана колко пъти тази форма е била изпратена на-->
<!--сървъра.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task08</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
    </div>
    <br>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
    </div>
    <br>
    <div>
        <input type="submit">
    </div>
</form>
</body>
</html

<?php
session_start();
if (!isset($_SESSION['counter'])){
    $_SESSION['counter'] = 0;
}
if ($_POST){
    $_SESSION['counter']++;
}
var_dump($_SESSION['counter']);
?>
