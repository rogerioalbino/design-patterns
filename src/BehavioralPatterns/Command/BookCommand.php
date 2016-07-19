<?php

namespace DesignPatterns\BehavioralPatterns\Command;

abstract class BookCommand 
{
    protected $bookCommandee;

    function __construct($bookCommandee_in) 
    {
        $this->bookCommandee = $bookCommandee_in;
    }
    
    abstract function execute();
}
