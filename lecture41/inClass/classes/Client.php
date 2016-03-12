<?php

class Client extends Person
{
    protected $address;

    protected $isPerson;

    /**
     * Client constructor.
     * @param $name
     * @param $phone
     * @param $address
     * @param $isPerson
     * @param $EGNorBULSTAT
     */
    public function __construct($name, $phone, $address, $isPerson, $EGNorBULSTAT)
    {
        parent::__construct($name, $phone, $EGNorBULSTAT);
        $this->isPerson = $isPerson;
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getEGNorBULSTAT()
    {
        return $this->EGNorBULSTAT;
    }

    /**
     * @param mixed $EGNorBULSTAT
     */
    public function setEGNorBULSTAT($EGNorBULSTAT)
    {
        $this->EGNorBULSTAT = $EGNorBULSTAT;
    }

    /**
     * @return mixed
     */
    public function getIsPerson()
    {
        return $this->isPerson;
    }

    /**
     * @param mixed $isPerson
     */
    public function setIsPerson($isPerson)
    {
        $this->isPerson = $isPerson;
    }

}