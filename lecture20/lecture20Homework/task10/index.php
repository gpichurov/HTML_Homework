<!--Задача 10:-->
<!--Реализирайте играта бесеница чрез PHP – потребителя въвежда букви-->
<!--в поле и при изпращане на формата или се модифицира даден текст-->
<!--като _ се заменят с познатата буква или се добавят картинки – как-->
<!--човече се беси. Да се има възможност за започване от начало и за-->
<!--генериране на нови думи при рестарт.-->
<?php
$points = 6;
$words = ['adsqwdwef', 'wefwefqwfw', 'wefwef'];
shuffle($words);
$wordNow = $words[0];
$len = strlen($wordNow);
$result = '';
while ($len > 0){
    $result .= '_ ';
    $len--;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task10</title>
</head>
<body>
<form action="" method="post">
    <div>
        <label for="car">Char</label>
        <input type="text" id="char" name="char" >
    </div>
    <br>
    <div>
        <input type="submit">
    </div>
    <br>
</form>
<?= $result?>
<br>
<?= $points?>
</body>
</html>
