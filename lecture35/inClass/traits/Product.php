<?php

class Product implements iStorable
{
    use StorableTraint;
    use NameTrait;

    private $price;

    /**
     * Product constructor.
     * @param $name
     * @param $price
     */
    public function __construct($name, $price)
    {
        $this->setName($name);
        $this->price = $price;
    }

    public function sell()
    {
        self::removeQuantity(1);
    }
}