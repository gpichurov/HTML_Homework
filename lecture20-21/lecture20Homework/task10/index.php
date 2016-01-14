<!--Задача 10:-->
<!--Реализирайте играта бесеница чрез PHP – потребителя въвежда букви-->
<!--в поле и при изпращане на формата или се модифицира даден текст-->
<!--като _ се заменят с познатата буква или се добавят картинки – как-->
<!--човече се беси. Да се има възможност за започване от начало и за-->
<!--генериране на нови думи при рестарт.-->
<?php



$points = 6;
//$words = ['adsqwdwef', 'wefwefqwfw', 'wefwef'];
//shuffle($words);


session_start();
//if (!isset($_SESSION['word'])){
//}
$_SESSION['word'] = 'theword';
$wordNow = $_SESSION['word'];

$len = strlen($wordNow);
$_SESSION['result'] = '';
while ($len > 0){
    $sameChars [] = false;
    $_SESSION['result'] .= '_ ';
    $len--;
}

$flack = false;
$sameChars = [];
if (!isset($_POST)){
    $char = $_POST['char'];
    for($i = 0; $i < strlen($wordNow); $i++){
        if ($char === $wordNow{$i}){
            $flack = true;
            $sameChars [$i] = 1;
        }
    }
    if ($flack){
        for($j = 0; $j < strlen($wordNow); $j++){
            if ($sameChars[$j]){
                $_SESSION['result']{$j * 2} = $char;
                $sameChars [$j] = false;
            }
        }
    } else {
        $points--;
    }
    $flack = false;
}

var_dump($_SESSION);
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
<?= $_SESSION['result']?>
<br>
<?= $points?>
</body>
</html>
