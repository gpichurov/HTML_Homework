<?php

class Person
{
    protected $name;

    protected $phone;

    protected $EGNorBULSTAT;

    /**
     * Person constructor.
     * @param $name
     * @param $phone
     * @param $EGNorBULSTAT
     */
    public function __construct($name, $phone, $EGNorBULSTAT)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $EGNorBULSTAT;
    }

}