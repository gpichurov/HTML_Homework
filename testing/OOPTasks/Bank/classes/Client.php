<?php

class Client
{
    private $name;

    private $address;

    private $money;

    private $wage;

    private $deposits;

    private $credits;

    /**
     * Client constructor.
     * @param $name
     * @param $address
     * @param $money
     * @param $wage
     */
    public function __construct($name, $address, $money, $wage)
    {
        $this->name = $name;
        $this->address = $address;
        $this->money = $money;
        $this->wage = $wage;
        $this->deposits = [];
        $this->credits = [];
    }

    public function newDeposit($money, Deposit $deposit, Bank $bank)
    {
        if ($this->money >= $money) {
            $this->deposits[] = $deposit;
            $this->getDeposits()[count($this->getDeposits() - 1)]->paymentCalc($money);
            //$deposit->paymentCalc($money);
            $this->money -= $money;
            $bank->getDeposit($money);
        } else {
            throw new Exception('Not enough money.');
        }
    }

    public function newCredit()
    {

    }

    public function payCredit()
    {

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
     * @return array
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * @param array $credits
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;
    }

    /**
     * @return array
     */
    public function getDeposits()
    {
        return $this->deposits;
    }

    /**
     * @param array $deposits
     */
    public function setDeposits($deposits)
    {
        $this->deposits = $deposits;
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
     * @return mixed
     */
    public function getWage()
    {
        return $this->wage;
    }

    /**
     * @param mixed $wage
     */
    public function setWage($wage)
    {
        $this->wage = $wage;
    }


}