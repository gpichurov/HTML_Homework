<?php

class Doctor extends Person
{
    private $patients;

    /**
     * Doctor constructor.
     */
    public function __construct($firstName, $lastName)
    {
        parent::__construct();
        $this->patients = [];
    }

    public function addPatient (Patient $patient)
    {
        if (!in_array($patient, $this->patients, true)) {
            $this->patients[] = $patient;
        }
    }

    public function removePatient (Patient $patient)
    {
        if (($key = array_search($patient, $this->patients)) !== false) {
            unset($this->patients[$key]);
        }
    }

    public function visitAll()
    {

    }

    protected function visitPatient(Patient $patient)
    {
        echo sprintf('Doctor %s %s visited patient %s %s'),
            $this->getFirstName(), $this->getLastName(),
            $patient->getFirstName(), $patient->getLastName();
    }

}