<?php

namespace DesignPattern\CreationalPatterns\Prototype;

use DesignPattern\CreationalPatterns\Prototype\BookPrototype;

class PHPBookPrototype extends BookPrototype 
{
    function __construct() 
    {
        $this->topic = 'PHP';
    }

    function __clone() 
    {

    }
    
}

