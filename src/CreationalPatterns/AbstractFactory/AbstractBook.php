<?php

namespace DesignPattern\CreationalPatterns\AbstractFactory;

abstract class AbstractBook 
{
 
    abstract function getAuthor();
    abstract function getTitle();
    
}
