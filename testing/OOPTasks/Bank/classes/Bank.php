<?php

class Bank
{
    private $name;

    private $address;

    private $money;

    private $products;

    private $reserve;

    /**
     * Bank constructor.
     * @param $name
     * @param $address
     * @param $money
     */
    public function __construct($name, $address, $money)
    {
        $this->name = $name;
        $this->address = $address;
        $this->money = $money;
        $this->products = [];
        $this->reserve = 0;
    }

    public function addProducts(Products $p)
    {
        $this->products[] = $p;
    }

    public function getDeposit($money)
    {
        $this->money += 9 / 10 * $money;
        $this->reserve += 1 / 10 * $money;
    }

    public function payInterest()
    {

    }

    public function giveCredit()
    {

    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
     * @return int
     */
    public function getReserve()
    {
        return $this->reserve;
    }

    /**
     * @param int $reserve
     */
    public function setReserve($reserve)
    {
        $this->reserve = $reserve;
    }

}