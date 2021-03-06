<?php

namespace DesignPattern\CreationalPatterns\FactoryMethod;

use DesignPattern\CreationalPatterns\FactoryMethod\AbstractFactoryMethod;

class OReillyFactoryMethod extends AbstractFactoryMethod 
{
    private $context = "OReilly";

    function makePHPBook($param) 
    {

    $book = NULL;   

        switch ($param) {
            case "us":
                $book = new OReillyPHPBook;
            break;
            case "other":
                $book = new SamsPHPBook;
            break;
            default:
                $book = new OReillyPHPBook;
            break;        
        }     

    return $book;

    }

}
