<?php


var_dump($_FILES);

$data = $_FILES['file'];
$path = 'images' . DIRECTORY_SEPARATOR . $data['name'];

var_dump($path);
if (is_uploaded_file($data['tmp_name'])) {
    move_uploaded_file($data['tmp_name'], $path);
}