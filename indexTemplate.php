<?php

require '/vendor/autoload.php';

use DesignPattern\BehavioralPatterns\TemplateMethod\TemplateExclaim;
use DesignPattern\BehavioralPatterns\TemplateMethod\TemplateStars;
use DesignPattern\BehavioralPatterns\TemplateMethod\Book;

class indexTemplate
{
	
	function __construct()
	{

        print('BEGIN TESTING TEMPLATE PATTERN');
        print("<br>");

        $book = new Book('PHP for Cats','Larry Truett');

        $exclaimTemplate = new TemplateExclaim();  
        $starsTemplate = new TemplateStars();

        print('test 1 - show exclaim template');
        print("<br>");
        print($exclaimTemplate->showBookTitleInfo($book));
        print("<br>");

        print('test 2 - show stars template');
        print("<br>");
        print($starsTemplate->showBookTitleInfo($book));
        print("<br>");

        print('END TESTING TEMPLATE PATTERN');
        print("<br>");

   }

}

new indexTemplate();
