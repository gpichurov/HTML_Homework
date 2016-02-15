<?php

class Person
{
    private $firstName;

    private $surName;

    public function __construct($firstName = 'John', $surName = 'Dow')
    {
        $this->setFirstName($firstName);
        $this->setSurName($surName);
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * @param mixed $surName
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;
    }

    public function getInfo()
    {
        return sprintf(
            'Hi my name is %s %s.',
            $this->getFirstName(),
            $this->getSurName()
        ) . PHP_EOL;
    }
}