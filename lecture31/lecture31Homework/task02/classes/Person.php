<?php

/**
 * Class Person
 */
class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    protected $age;

    /**
     * @var bool
     */
    private $isMale;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     * @param $isMale
     */
    public function __construct($name, $age, $isMale)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isMale = $isMale;
    }

    /**
     * @return string
     */
    public function showPersonInfo()
    {
        return $this->name . ' is ' . $this->age . ' years old and ' .
            ($this->isMale == true ? 'he is male.' : 'she is female.');
    }
}