<?php

require '/vendor/autoload.php';

use DesignPattern\BehavioralPatterns\Memento\BookReader;
use DesignPattern\BehavioralPatterns\Memento\BookMark;

class indexMemento
{

	function __construct()
	{

		print('BEGIN TESTING MEMENTO PATTERN');
		print('<br>');

		$bookReader = new BookReader('Core PHP Programming, Third Edition','103');
		$bookMark = new BookMark($bookReader);

		print('(at beginning) bookReader title: '.$bookReader->getTitle());
		print('<br>');
		print('(at beginning) bookReader page: '.$bookReader->getPage());
		print('<br>');

		$bookReader->setPage("104");
		$bookMark->setPage($bookReader);
		print('(one page later) bookReader page: '.$bookReader->getPage());  
		print('<br>');

		$bookReader->setPage('2005');  //oops! a typo
		print('(after typo) bookReader page: '.$bookReader->getPage());    
		print('<br>');

		$bookMark->getPage($bookReader);
		print('(back to one page later) bookReader page: '.$bookReader->getPage());    
		print('<br>');

		print('END TESTING MEMENTO PATTERN');

		}

	}

new indexMemento();