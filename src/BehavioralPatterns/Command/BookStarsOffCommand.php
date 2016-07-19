<?php

namespace DesignPatterns\BehavioralPatterns\Command;

class BookStarsOffCommand extends BookCommand 
{
    function execute() 
    {
        $this->bookCommandee->setStarsOff();
    }

}
