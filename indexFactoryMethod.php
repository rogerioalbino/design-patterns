<?php

require '/vendor/autoload.php';

use DesignPattern\CreationalPatterns\FactoryMethod\OReillyFactoryMethod;
use DesignPattern\CreationalPatterns\FactoryMethod\SamsFactoryMethod;

class indexAbstractFactory
{
	
	function __construct()
	{
		echo('<br>');
		echo('START TESTING FACTORY METHOD PATTERN');
		echo('<br>');
		echo('<br>');

		echo('testing OReillyFactoryMethod');
		$factoryMethodInstance = new OReillyFactoryMethod;
		$this->testFactoryMethod($factoryMethodInstance);
		echo('<br>');

		echo('testing SamsFactoryMethod');
		$factoryMethodInstance = new SamsFactoryMethod;
		$this->testFactoryMethod($factoryMethodInstance);
		echo('<br>');

		echo('END TESTING FACTORY METHOD PATTERN');
		echo('<br>');

		
	}

	function testFactoryMethod($factoryMethodInstance) {
		$phpUs = $factoryMethodInstance->makePHPBook("us");
		echo('us php Author: '.$phpUs->getAuthor());
		echo('<br>');
		echo('us php Title: '.$phpUs->getTitle());
		echo('<br>');

		$phpUs = $factoryMethodInstance->makePHPBook("other");
		echo('other php Author: '.$phpUs->getAuthor());
		echo('<br>');
		echo('other php Title: '.$phpUs->getTitle());
		echo('<br>');

		$phpUs = $factoryMethodInstance->makePHPBook("otherother");
		echo('otherother php Author: '.$phpUs->getAuthor());
		echo('<br>');
		echo('otherother php Title: '.$phpUs->getTitle());
		echo('<br>');
	}

}

new indexAbstractFactory();
