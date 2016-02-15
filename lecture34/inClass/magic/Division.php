<?php

class Division
{

    private $a;

    private $b;

    function __construct($a, $b)
    {
        return
    }


    public function divide($a, $b, $quotient = false)
    {

        $this->checkParam($b);

        $result = $a / $b;

        return $quotient ? (int) $result : $result;
    }

    public  function  checkParam($p)
    {
        if ($p == 0) {
            throw new Exception('inval par');
        }
    }

    public function getReturnValue($value, $quotient)
    {
        return $quotient ? (int) $value :  ;
    }
}