<?php

/**
 * Class Student
 */
class Student extends Person
{
    /**
     * @var int
     */
    private $score;

    /**
     * Student constructor.
     * @param $name
     * @param $age
     * @param $isMale
     * @param $score
     */
    public function __construct($name, $age, $isMale, $score)
    {
        parent::__construct($name, $age, $isMale);
        if ($score > 6 || $score < 2) {
            throw new InvalidArgumentException('Score must be between 2 and 6');
        }
        $this->score = $score;
    }

    /**
     * @return string
     */
    public function showStudentInfo()
    {
        parent::showPersonInfo();
        return parent::showPersonInfo() . ' And has score: ' . $this->score;
    }


}