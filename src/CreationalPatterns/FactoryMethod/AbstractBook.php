<?php

namespace DesignPattern\CreationalPatterns\FactoryMethod;

abstract class AbstractBook 
{
    abstract function getAuthor();
    abstract function getTitle();
}
