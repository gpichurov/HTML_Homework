<?php

class Singleton
{
    private static $instance;

    private $name;

    private function __construct(){}

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

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

Singleton::getInstance()->setName('Onufri');
var_dump(Singleton::getInstance()->getName());

$s1 = clone Singleton::getInstance();

var_dump($s1 == Singleton::getInstance());
var_dump($s1 === Singleton::getInstance());