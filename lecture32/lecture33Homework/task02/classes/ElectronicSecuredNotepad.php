<?php

class ElectronicSecuredNotepad extends AbstractЕlectronicDevice
{
    private $password;

    private $isStarted = false;

    /**
     * SimpleNotepad constructor.
     * @param Page
     */
    public function __construct($password)
    {
        if (strlen($password) >= 5 && preg_match('#\d#', $password) &&
                preg_match('#[A-Z]#', $password) && preg_match('#[a-z]#', $password)) {

            $this->password = $password;
            $this->notepad =  func_get_args();
            unset($this->notepad[0]);
        }
    }

    /**
     * @param $text
     * @param $pageNumber
     */
    public function addText($text, $pageNumber)
    {
        if ($_GET['password'] === $this->password && $this->isStarted) {
            $this->notepad[$pageNumber]->addText($text);
        }
    }

    /**
     * @param $text
     * @param $pageNumber
     */
    public function replaceText($text, $pageNumber)
    {
        if ($_GET['password'] === $this->password && $this->isStarted) {
            $this->notepad[$pageNumber]->deleteText();
            $this->notepad[$pageNumber]->addText($text);
        }
    }

    /**
     * @param $pageNumber
     */
    public function deleteText($pageNumber)
    {
        if ($_GET['password'] === $this->password && $this->isStarted) {
            $this->notepad[$pageNumber]->deleteText();
        }
    }

    /**
     * @return mixed
     */
    public function displayAllPages()
    {
        if ($_GET['password'] === $this->password && $this->isStarted) {
            foreach ($this->notepad as $key => $value) {
                $value->display();
            }
        }
    }

    public function start()
    {
        if ($_GET['password'] === $this->password) {
            $this->isStarted = true;
        }
    }

    public function stop()
    {
        if ($_GET['password'] === $this->password && $this->isStarted) {
            $this->isStarted = false;
        }
    }

    public function isStarted()
    {
        if ($_GET['password'] === $this->password) {
            return $this->isStarted;
        }
    }

    public function searchWord($word)
    {
        if ($_GET['password'] === $this->password && $this->isStarted) {
            foreach ($this->notepad as $key => $value) {
                if($value->searchWord($word)) {
                    return true;
                }
            }
        }
    }

    public function printAllPagesWithDigits()
    {
        if ($_GET['password'] === $this->password && $this->isStarted) {
            foreach ($this->notepad as $key => $value) {
                if($value->containsDigits()) {
                    $value->display();
                }
            }
        }
    }
}