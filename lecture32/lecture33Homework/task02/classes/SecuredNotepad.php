<?php

class SecuredNotepad extends AbstractNotepad
{
    private $password;

    /**
     * SimpleNotepad constructor.
     * @param Page
     */
    public function __construct($password)
    {
        $this->password = $password;
        $this->notepad =  func_get_args();
        unset($this->notepad[0]);
    }

    /**
     * @param $text
     * @param $pageNumber
     */
    public function addText($text, $pageNumber)
    {
        if ($_GET['password'] === $this->password) {
            $this->notepad[$pageNumber]->addText($text);
        }
    }

    /**
     * @param $text
     * @param $pageNumber
     */
    public function replaceText($text, $pageNumber)
    {
        if ($_GET['password'] === $this->password) {
            $this->notepad[$pageNumber]->deleteText();
            $this->notepad[$pageNumber]->addText($text);
        }
    }

    /**
     * @param $pageNumber
     */
    public function deleteText($pageNumber)
    {
        if ($_GET['password'] === $this->password) {
            $this->notepad[$pageNumber]->deleteText();
        }
    }

    /**
     * @return mixed
     */
    public function displayAllPages()
    {
        if ($_GET['password'] === $this->password) {
            foreach ($this->notepad as $key => $value) {
                $value->display();
            }
        }
    }
}