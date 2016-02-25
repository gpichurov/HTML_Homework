<?php

/**
 * Class AbstractNotepad
 */
abstract class AbstractNotepad
{
    /**
     * @var array
     */
    protected $notepad = [];

    abstract public function addText($text, $pageNumber);

    abstract public function replaceText($text, $pageNumber);

    abstract public function deleteText($pageNumber);

    abstract public function displayAllPages();

    abstract public function searchWord($word);

    abstract public function printAllPagesWithDigits();
}