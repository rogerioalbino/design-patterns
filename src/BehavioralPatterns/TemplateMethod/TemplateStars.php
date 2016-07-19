<?php

namespace DesignPattern\BehavioralPatterns\TemplateMethod;

class TemplateStars extends TemplateAbstract 
{
    function processTitle($title) 
    {
        return Str_replace(' ','*',$title); 
    }
}
