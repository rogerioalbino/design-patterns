<?php

require '/vendor/autoload.php';

use DesignPattern\CreationalPatterns\AbstractFactory\OReillyBookFactory;
use DesignPattern\CreationalPatterns\AbstractFactory\SamsBookFactory;

class indexAbstractFactory
{
	
	function __construct()
	{

		echo('BEGIN TESTING ABSTRACT FACTORY PATTERN');
		echo('<br>');

		echo('testing OReillyBookFactory');
		echo('<br>');

		$bookFactoryInstance = new OReillyBookFactory;
		$this->testConcreteFactory($bookFactoryInstance);
		echo('<br>');

		echo('testing SamsBookFactory');
		echo('<br>');
		$bookFactoryInstance = new SamsBookFactory;
		$this->testConcreteFactory($bookFactoryInstance);

		echo("END TESTING ABSTRACT FACTORY PATTERN");
		echo('<br>');

		
	}

	function testConcreteFactory($bookFactoryInstance)
	{
		$phpBookOne = $bookFactoryInstance->makePHPBook();
		echo('first php Author: '.$phpBookOne->getAuthor());
		echo('<br>');
		echo('first php Title: '.$phpBookOne->getTitle());
		echo('<br>');

		$phpBookTwo = $bookFactoryInstance->makePHPBook();
		echo('second php Author: '.$phpBookTwo->getAuthor());
		echo('<br>');
		echo('second php Title: '.$phpBookTwo->getTitle());
		echo('<br>');

		$mySqlBook = $bookFactoryInstance->makeMySQLBook();
		echo('<br>');
		echo('MySQL Author: '.$mySqlBook->getAuthor());
		echo('<br>');
		echo('MySQL Title: '.$mySqlBook->getTitle());
		echo('<br>');
	}



}

new indexAbstractFactory();
