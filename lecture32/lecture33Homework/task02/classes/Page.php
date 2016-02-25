<?php

class Page
{
    private $title;

    private $text;

    /**
     * Page constructor.
     * @param $title
     * @param $text
     */
    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    /**
     * @param mixed $text
     */
    public function addText($text)
    {
        $this->text = $this->text . $text;
    }

    /**
     * @return mixed
     */
    public function deleteText()
    {
        $this->text = '';
    }

    public function display()
    {
        echo $this->title . PHP_EOL;
        echo $this->text . PHP_EOL;
    }

    public function searchWord($word)
    {
        if (strpos($this->text, $word) !== false) {
            return true;
        } else {
            return false;
        }
    }

    public function containsDigits()
    {
        if (preg_match('#\d#', $this->text) != false) {
            return true;
        } else {
            return false;
        }
    }
}