<?php

class Book extends Allbooks
{
    private $author;

    private $cover;

    public function __construct($title, $date, $publisher, $genre, $author, $cover)
    {
        parent::__construct($title, $date, $publisher, $genre);
        $this->author = $author;
        $this->cover = $cover;
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

    /**
     * @return mixed
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * @param mixed $cover
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
    }


}