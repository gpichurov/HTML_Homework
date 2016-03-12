<?php

class Treatment
{
    private $diagnose;

    private $treatments;

    private $duration;

    private $daysLeft;

    /**
     * Treatment constructor.
     * @param $diagnose
     * @param $treatments
     * @param $duration
     */
    public function __construct($diagnose, $treatments, $duration)
    {
        $this->diagnose = $diagnose;
        $this->treatments = $treatments;
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getDiagnose()
    {
        return $this->diagnose;
    }

    /**
     * @param mixed $diagnose
     */
    public function setDiagnose($diagnose)
    {
        $this->diagnose = $diagnose;
    }

    /**
     * @return mixed
     */
    public function getTreatments()
    {
        return $this->treatments;
    }

    /**
     * @param mixed $treatments
     */
    public function setTreatments($treatments)
    {
        $this->treatments = $treatments;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getDaysLeft()
    {
        return $this->daysLeft;
    }

    /**
     * @param mixed $daysLeft
     */
    public function setDaysLeft($daysLeft)
    {
        $this->daysLeft = $daysLeft;
    }

}