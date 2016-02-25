<?php

require_once 'autoload.php';

$library = new Library();

$book1 = new Book('test', '20.12.1999', 'Publisher', 'Genre', 'Author', 'cover');
$magazine1 = new Magazine('test', '20.12.1999', 'Publisher', 'Genre', '1');
$textbook1 = new Textbook('test', '20.12.1999', 'Publisher', 'Genre', 'Author');

var_dump($book1, $magazine1, $textbook1);