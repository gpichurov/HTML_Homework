<?php

class SimpleNotepad extends AbstractNotepad
{
    /**
     * SimpleNotepad constructor.
     * @param Page
     */
    public function __construct()
    {
        $this->notepad =  func_get_args();
    }

    /**
     * @param $text
     * @param $pageNumber
     */
    public function addText($text, $pageNumber)
    {
        $this->notepad[$pageNumber - 1]->addText($text);
    }

    /**
     * @param $text
     * @param $pageNumber
     */
    public function replaceText($text, $pageNumber)
    {
        $this->notepad[$pageNumber - 1]->deleteText($text);
        $this->notepad[$pageNumber - 1]->addText($text);
    }

    /**
     * @param $pageNumber
     */
    public function deleteText($pageNumber)
    {
        $this->notepad[$pageNumber - 1]->deleteText();
    }

    /**
     * @return mixed
     */
    public function displayAllPages()
    {
        foreach ($this->notepad as $key => $value) {
            $value->display();
        }
    }
}