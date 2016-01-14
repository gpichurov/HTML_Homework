<!--Задача 5:-->
<!--Създайте HTML страница с PHP скрипт, в който изписва всички REQUEST-->
<!--параметри (POST и GET ). Да изписва техните имена и стойности, както и да показва от-->
<!--какъв тип са тези параметри (int, string, …).-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task05</title>
    <link rel="stylesheet" href="../../../reset.css">
</head>
<body>
<form action="" method="get">
    <div>
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name="firstName">
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
var_dump($_REQUEST);
//foreach ($_REQUEST as $key => $value){
//    echo " $key => $value " . gettype($value) . '<br/>';
//}
?>