<?php

abstract class Products
{
    protected $name;

    protected $type;

    protected $interest;

    protected $period;

    protected $payment;

    protected $money;

    protected function paymentCalc($money)
    {
        $this->money = $money;

        $this->payment = $money * (1 + $this->interest) / $this->period;
    }
}