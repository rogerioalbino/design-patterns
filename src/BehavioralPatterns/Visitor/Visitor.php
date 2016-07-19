<?php

namespace DesignPattern\BehavioralPatterns\Visitor;

abstract class Visitor 
{
    abstract function visitBook(BookVisitee $bookVisitee_In);
    abstract function visitSoftware(SoftwareVisitee $softwareVisitee_In);
}
