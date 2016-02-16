<?php

class Person
{
    use NameTrait{
        getName as getNameFromTrait;
    }

    private $title;

    /**
     * Person constructor.
     */
    public function __construct($title, $name)
    {
        $this->title = $title;
        $this->setName($name);
    }
    public function getName()
    {
        return sprintf('%s %s', $this->title, $this->getNameFromTrait());
    }
}