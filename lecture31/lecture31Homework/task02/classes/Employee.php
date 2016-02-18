<?php

/**
 * Class Employee
 */
class Employee extends Person
{
    /**
     * @var int
     */
    private $daySalary;

    /**
     * Emplyee constructor.
     * @param $name
     * @param $age
     * @param $isMale
     * @param $daySalary
     */
    public function __construct($name, $age, $isMale, $daySalary)
    {
        parent::__construct($name, $age, $isMale);
        $this->daySalary = $daySalary;
    }

    /**
     * @param $hours
     * @return float
     */
    public function calculateOvertime($hours)
    {
        if ($this->age < 18) {
            return 0;
        } else {
            return 1.5 * $hours * $this->daySalary / 8;
        }
    }

    /**
     * @return string
     */
    public function showEmployeeInfo()
    {
        return parent::showPersonInfo() . ' And has daily salary: ' . $this->daySalary;
    }
}