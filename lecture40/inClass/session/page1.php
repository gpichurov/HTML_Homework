<?php
require_once 'Person.php';
session_start();

$p = new Person();

if ($_POST) {
    $p->setName($_POST['name']);
    $p->setAge($_POST['age']);

    $_SESSION['person'] = $p;
    header('Location:page2.php');
}

//if (isset($_POST['name'])) {
//    $_SESSION['name'] = $_POST['name'];
//    header('Location:page2.php');
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="age">Age</label>
    <input type="text" name="age" id="age">

    <button type="submit">Send</button>
</form>
</body>
</html>