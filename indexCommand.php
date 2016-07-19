<?php

require '/vendor/autoload.php';

use DesignPatterns\BehavioralPatterns\Command\BookCommandee;
use DesignPatterns\BehavioralPatterns\Command\BookStarsOnCommand;
use DesignPatterns\BehavioralPatterns\Command\BookStarsOffCommand;

class indexCommand
{

	function __construct()
	{

		print('BEGIN TESTING COMMAND PATTERN');
		print('<br>');

		$book = new BookCommandee('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
		print('book after creation: ');
		print('<br>');
		print($book->getAuthorAndTitle());
		print('<br>');

		$starsOn = new BookStarsOnCommand($book);
		callCommand($starsOn);
		print('book after stars on: ');
		print('<br>');
		print($book->getAuthorAndTitle());
		print('<br>');

		$starsOff = new BookStarsOffCommand($book);
		callCommand($starsOff);
		print('book after stars off: ');
		print('<br>');
		print($book->getAuthorAndTitle());
		print('<br>');

		print('END TESTING COMMAND PATTERN');
		print('<br>');
		
		$this->callCommand();
	}

	function callCommand(BookCommand $bookCommand_in) 
	{
		$bookCommand_in->execute();
	}

}

new indexCommand();
