<?php

class Vehicle
{
    private $description;

    public function  __construct($description)
    {
        $this->setDescription($description);
    }



    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}