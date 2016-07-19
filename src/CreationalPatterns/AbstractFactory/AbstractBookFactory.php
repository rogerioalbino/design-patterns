<?php

namespace DesignPattern\CreationalPatterns\AbstractFactory;

abstract class AbstractBookFactory 
{
    abstract function makePHPBook();
    abstract function makeMySQLBook();
}
