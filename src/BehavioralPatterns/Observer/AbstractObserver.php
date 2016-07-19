<?php

namespace DesignPattern\BehavioralPatterns\Observer;

abstract class AbstractObserver 
{
    abstract function update(AbstractSubject $subject_in);
}
