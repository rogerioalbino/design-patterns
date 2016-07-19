<?php

namespace DesignPattern\CreationalPatterns\FactoryMethod;

use DesignPattern\CreationalPatterns\FactoryMethod\AbstractPHPBook;

class VisualQuickstartPHPBook extends AbstractPHPBook 
{
    private $author;
    private $title;

    function __construct() 
    {
      $this->author = 'Larry Ullman';
      $this->title  = 'PHP for the World Wide Web';
    }

    function getAuthor() 
    {
    	return $this->author;
    }

    function getTitle()
    {
    	return $this->title;
    }

}
