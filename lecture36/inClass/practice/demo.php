<?php

require_once 'autoload.php';

$library = new Library();

$book1 = new Book('test', '20.12.1999', 'Publisher', 'Genre', 'Author', 'cover');
$magazine1 = new Magazine('test', '20.12.1999', 'Publisher', 'Genre', '1');
$textbook1 = new Textbook('test', '20.12.1999', 'Publisher', 'Genre', 'Author');
$library = new Library;
$reader1 = new ReaderCard('Georgi', '12.1.2001');
$reader2 = new ReaderCard('Ivan', '12.1.2001');

$library->addAllReaders($reader1, $reader2);
$library->addBooks($book1, $magazine1, $textbook1);
$library->display();

$library->rentBook($book1, $reader1, '1.1.1111');
$library->returnBook($book1, '2.2.2222');
var_dump($book1, $reader1);

