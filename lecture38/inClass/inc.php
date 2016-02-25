<?php

function dosmth(){
    $a = 5; $b = 10;

    $array = ['id' => 5, 'name' => 'Some Name'];

    $key = isset($_GET['key']) ? $_GET['key'] : '';

    if ($key == 'id' || $key == 'name') {
        echo $array[$key];
    } else {
        throw new Exception('No index in array');
    }
}

function outerFunction() {
    dosmth();
}