<?php

abstract class Person
{

    private $name;

    private $EGN;

    /**
     * Person constructor.
     * @param $name
     * @param $EGN
     */
    public function __construct($name, $EGN)
    {
        $this->name = $name;
        $this->EGN = $EGN;
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
    public function getEGN()
    {
        return $this->EGN;
    }

    /**
     * @param mixed $EGN
     */
    public function setEGN($EGN)
    {
        $this->EGN = $EGN;
    }


}