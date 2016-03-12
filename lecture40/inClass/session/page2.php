<?php

require_once 'Person.php';

session_start();

var_dump($_SESSION);

var_dump(unserialize($_SESSION['person']));

//unset($_SESSION['name']);