<?php

namespace DesignPatterns\BehavioralPatterns\ChainOfResponsibility;

abstract class AbstractBookTopic 
{
    abstract function getTopic();
    abstract function getTitle();
    abstract function setTitle($title_in);
}
 