<?php

class Magazine extends Allbooks
{
    private $magazineNumber;

    public function __construct($title, $date, $publisher, $genre, $magazineNumber)
    {
        parent::__construct($title, $date, $publisher, $genre);
        $this->magazineNumber = $magazineNumber;
    }

    /**
     * @return mixed
     */
    public function getMagazineNumber()
    {
        return $this->magazineNumber;
    }

    /**
     * @param mixed $magazineNumber
     */
    public function setMagazineNumber($magazineNumber)
    {
        $this->magazineNumber = $magazineNumber;
    }
}