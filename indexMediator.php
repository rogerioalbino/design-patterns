<?php

require '/vendor/autoload.php';

use DesignPattern\BehavioralPatterns\Mediator\BookMediator;

class indexMediator
{
	
	function __construct()
	{

		print('BEGIN TESTING MEDIATOR PATTERN');
		print('<br>');

		$mediator = new BookMediator('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');

		$author = $mediator->getAuthor();
		$title = $mediator->getTitle();

		print('Original Author and Title: ');
		print('<br>');
		print('author: ' . $author->getAuthor());
		print('<br>');
		print('title: ' . $title->getTitle());
		print('<br>');

		$author->setAuthorLowerCase();

		print('After Author set to Lower Case: ');
		print('<br>');
		print('author: ' . $author->getAuthor());
		print('<br>');
		print('title: ' . $title->getTitle());
		print('<br>');

		$title->setTitleUpperCase();

		print('After Title set to Upper Case: ');
		print('<br>');
		print('author: ' . $author->getAuthor());
		print('<br>');
		print('title: ' . $title->getTitle());
		print('<br>');

		print('END TESTING MEDIATOR PATTERN');


	}

}

new indexMediator();
