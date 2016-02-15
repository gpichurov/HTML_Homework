<?php

class Person
{
    private $name;

    private $age;

    private $friend;

    private $personalNumber;

    private $isMale;

    private $money;

    private $car;

    /**
     * Person constructor.
     * @param $name
     * @param $personalNumber
     * @param $isMale
     */
    public function __construct($name, $personalNumber, $isMale)
    {
        $this->name = $name;
        $this->personalNumber = $personalNumber;
        $this->isMale = $isMale;
    }

    /**
     * @return mixed
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param mixed $money
     */
    public function setMoney($money)
    {
        $this->money = $money;
    }

    /**
     * @return mixed
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * @param mixed $car
     */
    public function setCar($car)
    {
        $this->car = $car;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getFriend()
    {
        return $this->friend;
    }

    public function setFriend($friend)
    {
        $this->friend = $friend;
    }

    public function buyCar(Car $car) {
        if ($this->getMoney() >= $car->getPrice()) {
            $this->setMoney($this->getMoney() - $car->getPrice());
            $this->setCar($car);
        }
    }

    public function sellCarForScrap($metalPrice)
    {
        $this->money = ($this->getCar()->calculateCarPriceForScrap($metalPrice) + $this->money);
    }
}