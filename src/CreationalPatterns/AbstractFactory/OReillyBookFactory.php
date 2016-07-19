<?php

namespace DesignPattern\CreationalPatterns\AbstractFactory;

use DesignPattern\CreationalPatterns\AbstractFactory\AbstractBookFactory;

class OReillyBookFactory extends AbstractBookFactory 
{

    private $context = "OReilly";
    
    function makePHPBook() 
    {
        return new OReillyPHPBook;
    }

    function makeMySQLBook() 
    {
        return new OReillyMySQLBook;
    }

}
