<!--Задача 8:-->
<!--Създайте HTML страница с PHP скрипт, в който съдържа HTML форма и-->
<!--показва на екрана колко пъти тази форма е била изпратена на-->
<!--сървъра.-->
<?php
require_once '../functions.php';
$username = getValue($_POST, 'username');
$password = getValue($_POST, 'password');
$repeatPassword = getValue($_POST, 'repeatPassword');

$validationErrors = [];

function validateForm(&$errors) {
    global $username, $password, $repeatPassword;

    $errors = [];

    if (!validateRequired($username)) {
        $errors['username'][] = 'User Name is required';
    } else if(!validateLongerOrEqualString($username, 4)) {
        $errors['username'][] = 'User Name must be at least 4 characters long';
    }

    if (!validateRequired($password)) {
        $errors['password'][] = 'Password is required';
    } else {
        if(!validateLongerOrEqualString($password, 5)) {
            $errors['password'][] = 'Password must be at least 5 characters long';
        }

        if (!validateNonAlphaNumeric($password)) {
            $errors['password'][] = 'Password must contain at least 1 non alphanumeric character';
        }
    }
    if (!validateRequired($repeatPassword)) {
        $errors['repeatPassword'][] = 'Password is required';
    } else {
        if(!validateLongerOrEqualString($repeatPassword, 5)) {
            $errors['repeatPassword'][] = 'Password must be at least 5 characters long';
        }

        if (!validateNonAlphaNumeric($repeatPassword)) {
            $errors['repeatPassword'][] = 'Password must contain at least 1 non alphanumeric character';
        }

        if ($repeatPassword !== $password) {
            $errors['repeatPassword'] [] = 'Password does not match';
        }
    }
    return empty($errors);
}

function getFieldClass($errors, $field) {
    return !empty($errors[$field]) ? 'error' : '';
}

if (!empty($_POST)) {
    validateForm($validationErrors);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task08</title>
    <style type="text/css">
        .error {
            color: red;
        }
        .error input{
            border-color: red;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <div class="<?= getFieldClass($validationErrors, 'username')?>">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?= htmlentities($username)?>">
        <?= displayErrors($validationErrors, 'username')?>
    </div>
    <br>
    <div class="<?= getFieldClass($validationErrors, 'password')?>">
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <?= displayErrors($validationErrors, 'password')?>
    </div>
    <br>
    <div class="<?= getFieldClass($validationErrors, 'repeatPassword')?>">
        <label for="repeatPassword">Repeat Password</label>
        <input type="password" id="repeatPassword" name="repeatPassword">
        <?= displayErrors($validationErrors, 'repeatPassword')?>
    </div>
    <br>
    <div>
        <input type="submit" value="Submit" name="submit">
    </div>
    <div>
        <input type="hidden" name="counter" value="<?= $counter ?>" />
    </div>
</form>

<?php
//if (validateForm($validationErrors)) {
//    echo " Your username is: \"$username\" and your crypted password is \"" . md5($password) . "\"." ;
//}
$counter = isset($_POST['counter']) ? $_POST['counter'] : 0;

    if($_POST['submit']) {
        $counter++;
    }
    var_dump($_POST['counter']);

?>
</body>
</html
