<?php

class Room
{
    private $beds;

    /**
     * Room constructor.
     */
    public function __construct()
    {
        $this->beds = [null, null, null];
    }

    public function isAvailable($gender)
    {
        if (count(array_filter($this->beds)) == count($this->beds)) {
            return false;
        }

        $p = current(array_filter($this->beds));
        if ($p instanceof Patient && $p->getGender() != $gender) {
            return false;
        }

        return true;
    }

    public function accommodate(Patient $person)
    {
        foreach ($this->beds as $k => $v) {
            if (!$v) {
                $this->beds[$k] = $person;
                break;
            }
        }
    }
}