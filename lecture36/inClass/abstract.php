<?php

abstract class A
{
    abstract public function methodA();
}

abstract class B extends A
{

}

class C extends B
{
    public function methodA()
    {

    }
}

$b = new C();