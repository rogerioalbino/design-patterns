<?php

namespace DesignPattern\CreationalPatterns\AbstractFactory;

use DesignPattern\CreationalPatterns\AbstractFactory\AbstractBookFactory;

class SamsBookFactory extends AbstractBookFactory 
{

    private $context = "Sams";
    
    function makePHPBook() 
    {
        return new SamsPHPBook;
    }

    function makeMySQLBook() 
    {
        return new SamsMySQLBook;
    }
    
}
