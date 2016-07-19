<?php

namespace DesignPattern\BehavioralPatterns\TemplateMethod;

class TemplateExclaim extends TemplateAbstract 
{
    
    function processTitle($title) 
    {
      return Str_replace(' ','!!!',$title); 
    }

    function processAuthor($author) 
    {
      return Str_replace(' ','!!!',$author);
    }
}
