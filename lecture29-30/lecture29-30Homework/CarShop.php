<?php

class CarShop
{
    private $cars = [];

    /**
     * CarShop constructor.
     * @param array $cars
     */
    public function __construct()
    {
        $this->cars = func_get_args();
    }

    public function addCar($car)
    {
        array_push($this->cars, $car);
    }

    public function getNextCar()
    {
        if (key($this->cars) == count($this->cars) - 1) {
            $result = current($this->cars);
            reset($this->cars);
            return $result;
        } else {
            $result = current($this->cars);
            next($this->cars);
            return $result;
        }
    }

    public function sellNextCar($buyer)
    {
        $buyer->buyCar(prev($this->cars));
    }

    public function removeCar($car)
    {
        unset($this->cars[key($this->cars)]);
        $this->cars = array_values($this->cars);
    }

    /**
     * @return array
     */
    public function showAllCarsInTheShop()
    {
        return print_r($this->cars);
    }
}