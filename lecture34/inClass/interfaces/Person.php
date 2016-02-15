<?php

require_once 'iPerson.php';

class Person implements iPerson
{
    private $name;

    private $age;

    private $money;

    private $items;

    const DEFAULT_MONEY = 1000;

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function buy(iSellable $item)
    {
        if ($item->getPrice() > $this->money) {
            return false;
        }

        $this->money -= $item->getPrice();
        $this->items[] = $item;
    }

    public function __toString()
    {
        return sprintf(
            '%s, %d, %2.f',
            $this->name,
            $this->age,
            $this->money
        );
    }

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->money = self::DEFAULT_MONEY;
        $this->items = [];
    }

}