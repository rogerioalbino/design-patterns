<?php

namespace DesignPatterns\BehavioralPatterns\Command;

class BookStarsOnCommand extends BookCommand 
{
    function execute() {
        $this->bookCommandee->setStarsOn();
    }
}