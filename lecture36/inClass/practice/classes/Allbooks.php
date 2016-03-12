<?php

abstract class Allbooks
{
    private static $number = 0;

    private $title;

    private $date;

    private $publisher;

    private $genre;

    private $status = true;

    private $history;

    /**
     * Allbooks constructor.
     * @param $title
     * @param $date
     * @param $publisher
     * @param $genre
     */
    public function __construct($title, $date, $publisher, $genre)
    {
        $this->number = self::$number++;
        $this->title = $title;
        $this->date = $date;
        $this->publisher = $publisher;
        $this->genre = $genre;
        $this->history = [];
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param mixed $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getHistory()
    {
        return $this->history;
    }

    public function getBook($dateGet, $reader)
    {
        $a = ['dateGet' => $dateGet,
            'reader' => $reader,
            'dateReturn' => 'NO'];
        $this->history[] = $a;
    }

    public function returnBook($dateReturn)
    {
        $this->history[count($this->history) - 1]['dateReturn'] = $dateReturn;

    }

}