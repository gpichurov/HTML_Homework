<?php

class ReaderCard
{
    private $number = 0;

    private $name;

    private $date;

    private $booksTakenList;

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
        $this->booksTakenList = [];
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
    public function getBooksTakenList()
    {
        return $this->booksTakenList;
    }

    /**
     * @param array Allbooks $bookTaken
     */
    public function getBook($bookTaken, $date)
    {
        $a = [
            'book' => $bookTaken,
            'dateGet' => $date,
            'when to return' => $date,
            'status' => $bookTaken->getStatus()
        ];
        $this->booksTakenList[] = $a;
    }

    public function returnBook($date)
    {

    }
}