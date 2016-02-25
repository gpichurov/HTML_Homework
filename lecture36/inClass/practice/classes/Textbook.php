<?php

class Textbook extends Allbooks
{
    private $author;

    public function __construct($title, $date, $publisher, $genre, $author)
    {
        parent::__construct($title, $date, $publisher, $genre);
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }
}