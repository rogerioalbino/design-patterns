<?php

namespace DesignPattern\CreationalPatterns\Prototype;

use DesignPattern\CreationalPatterns\Prototype\BookPrototype;

class SQLBookPrototype extends BookPrototype 
{
    
    function __construct() 
    {
        $this->topic = 'SQL';
    }

    function __clone() 
    {
    
    }

}
