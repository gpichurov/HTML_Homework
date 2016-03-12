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

    public function addAllReaders($reader)
    {
        $this->allReaders = func_get_args();
    }

    public function display()
    {
        foreach ($this->allBooks as $k => $v) {
            print_r($this->allBooks[$k]);
        }
    }

    /**
     * @param Allbooks $book
     * @param $reader
     * @param $date
     */
    public function rentBook($book,ReaderCard $reader, $date)
    {
        if ($book->getStatus()) {
            $book->setStatus(false);
            $book->getBook($date, $reader);
            $reader->getBook($book, $date);
        }

    }

    /**
     * @param  $book
     * @param $date
     */
    public function returnBook($book, $date)
    {
        $book->setStatus(true);
        $book->returnBook($date);
    }
}