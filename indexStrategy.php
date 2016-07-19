<?php

require '/vendor/autoload.php';

use DesignPattern\BehavioralPatterns\Strategy\StrategyContext;
use DesignPattern\BehavioralPatterns\Strategy\Book;

class indexStrategy
{
	
	function __construct()
	{

          print('BEGIN TESTING STRATEGY PATTERN');
          print("<br>");

          $book = new Book('PHP for Cats','Larry Truett');

          $strategyContextC = new StrategyContext('C');
          $strategyContextE = new StrategyContext('E');
          $strategyContextS = new StrategyContext('S');

          print('test 1 - show name context C');
          print("<br>");
          print($strategyContextC->showBookTitle($book));
          print("<br>");

          print('test 2 - show name context E');
          print("<br>");
          print($strategyContextE->showBookTitle($book));
          print("<br>");

          print('test 3 - show name context S');
          print("<br>");
          print($strategyContextS->showBookTitle($book));
          print("<br>");

          print('END TESTING STRATEGY PATTERN');
          print("<br>");

    }

}

new indexStrategy();
