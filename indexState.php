<?php

require '/vendor/autoload.php';

use DesignPattern\BehavioralPatterns\State\Book;
use DesignPattern\BehavioralPatterns\State\bookContext;

class indexState
{

	function __construct()
	{


		print('BEGIN TESTING STATE PATTERN');
		print('<br>');

		$book = new Book('PHP for Cats','Larry Truett');;
		$context = new bookContext($book);

		print('test 1 - show name');
		print('<br>');
		print($context->getBookTitle());
		print('<br>');

		print('test 2 - show name');
		print('<br>');
		print($context->getBookTitle());
		print('<br>');

		print('test 3 - show name');
		print('<br>');
		print($context->getBookTitle());
		print('<br>');

		print('test 4 - show name');
		print('<br>');
		print($context->getBookTitle());
		print('<br>');

		print('END TESTING STATE PATTERN');
	}

}

new indexState();