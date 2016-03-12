<?php

class Patient extends Person
{

    private $gender;

    private $treatmentPlan;

    private $section;

    private $roomNumber;

    private $bed;

    /**
     * Patient constructor.
     * @param $firstName
     * @param $lastName
     * @param $gender
     */
    public function __construct($firstName, $lastName, $gender, Treatment $treatmentPlan)
    {
        parent::__construct($firstName, $lastName);
        $this->gender = $gender;
        $this->treatmentPlan = $treatmentPlan;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return Treatment
     */
    public function getTreatmentPlan()
    {
        return $this->treatmentPlan;
    }

    /**
     * @param Treatment $treatmentPlan
     */
    public function setTreatmentPlan($treatmentPlan)
    {
        $this->treatmentPlan = $treatmentPlan;
    }

    /**
     * @return mixed
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param mixed $section
     */
    public function setSection($section)
    {
        $this->section = $section;
    }

    /**
     * @return mixed
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * @param mixed $roomNumber
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;
    }


}