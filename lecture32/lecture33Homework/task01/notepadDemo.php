<?php

require_once 'autoload.php';

$simpleNotepad = new SimpleNotepad(new Page('simpleTitle1', 'simpleText1'),
    new Page('simpleTitle2', 'simpleText2'), new Page('simpleTitle3', 'simpleText3'));
$simpleNotepad->addText(' Added', 1);
$simpleNotepad->replaceText('Replaced2', 2);
$simpleNotepad->deleteText(3);
$simpleNotepad->displayAllPages();

$securedNotepad = new SecuredNotepad('myPass', new Page('securedTitle1', 'securedText1'),
    new Page('securedTitle2', 'securedText2'), new Page('securedTitle3', 'securedText3'));
$_GET['password'] = 'myPass';
$securedNotepad->addText(' Added', 1);
$securedNotepad->replaceText('Replaced2', 2);
$securedNotepad->deleteText(3);
$securedNotepad->displayAllPages();