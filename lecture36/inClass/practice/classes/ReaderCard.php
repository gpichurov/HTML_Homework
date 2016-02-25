<?php

class ReaderCard
{
    private $number = 0;

    private $name;

    private $date;

    private $booksTaken = [];

    /**
     * Reader constructor.
     * @param $name
     * @param $date
     */
    public function __construct($name, $date)
    {
        $this->number++;
        $this->name = $name;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return array
     */
    public function getBooksTaken()
    {
        return $this->booksTaken;
    }

    /**
     * @param array $bookTaken
     */
    public function addBookTaken($bookTaken)
    {
        array_push($this->booksTaken, $bookTaken);
    }
}