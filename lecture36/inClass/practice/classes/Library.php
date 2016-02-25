<?php

class Library
{
    private $allBooks = [];

    private $allReaders = [];

    private $reader;

    private $whenGet;

    private $whenReturned;

    public function addBook($book)
    {
        array_push($this->allBooks, $book);
    }
    public function addBooks()
    {
        $this->allBooks = func_get_args();
    }
    /**
     * @return array
     */
    public function getAllBooks()
    {
        return $this->allBooks;
    }

    /**
     * @param array $book
     */
    public function addNewBook($book)
    {
        array_push($this->allBooks, $book);
    }

    /**
     * @return array
     */
    public function getAllReaders()
    {
        return $this->allReaders;
    }

    /**
     * @param array $reader
     */
    public function addNewReader($reader)
    {
        array_push($this->allReaders, $reader);
    }

}