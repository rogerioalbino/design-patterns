<?php

namespace DesignPattern\BehavioralPatterns\Visitor;

abstract class Visitee 
{
    abstract function accept(Visitor $visitorIn);
}

