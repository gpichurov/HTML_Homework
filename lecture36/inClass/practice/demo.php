<?php

require_once 'autoload.php';

$book1 = new Book('test', '20.12.1999', 'Publisher', 'Genre', 'Author', 'cover');
$book2 = new Book('test', '20.12.1999', 'Publisher', 'Genre', 'Author', 'cover');

var_dump($book1, $book2);