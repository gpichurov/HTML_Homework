<?php

abstract class AbstractЕlectronicDevice extends AbstractNotepad
{
    abstract public function start();

    abstract public function stop();

    abstract public function isStarted();
}