<!--Задача 7:-->
<!--Създайте HTML страница с PHP скрипт, в който изписва информация за-->
<!--browser-a, с който е отворен този скрипт. Нека след това да се изпише-->
<!--информация за сървъра и за host-a. Коя системна променлива ще-->
<!--използвате, за да извлечете тези информация?-->

<?php
//var_dump(get_browser());
var_dump($_SERVER['HTTP_USER_AGENT'], $_SERVER['SERVER_SIGNATURE'], $_SERVER['HTTP_HOST']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task07</title>
</head>
<body>

</body>
</html
