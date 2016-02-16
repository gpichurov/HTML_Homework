<?php

trait StorableTraint
{
    protected static $count;

    public function addQuantity($quantity)
    {
        self::$count += $quantity;
    }

    public function removeQuantity($quantity)
    {
        self::$count -= $quantity;
    }

    public function getQuantity()
    {
        return self::$count;
    }
}