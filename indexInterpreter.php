<?php

require '/vendor/autoload.php';

use DesignPattern\BehavioralPatterns\Interpreter\BookList;
use DesignPattern\BehavioralPatterns\Interpreter\Book;
use DesignPattern\BehavioralPatterns\Interpreter\Interpreter;

class indexInterpreter
{
	
	function __construct()
	{

		print('BEGIN TESTING INTERPRETER PATTERN');
		print('');

  //load BookList for test data
		$bookList = new BookList();
		$inBook1 = new Book('PHP for Cats','Larry Truett');
		$inBook2 = new Book('MySQL for Cats','Larry Truett');
		$bookList->addBook($inBook1);
		$bookList->addBook($inBook2);

		$interpreter = new Interpreter($bookList);

		print('test 1 - invalid request missing "book"');
		print('<br>');
		print($interpreter->interpret('author 1'));
		print('<br>');

		print('test 2 - valid book author request');
		print('<br>');
		print($interpreter->interpret('book author 1'));
		print('<br>');

		print('test 3 - valid book title request');
		print('<br>');
		print($interpreter->interpret('book title 2'));
		print('<br>');

		print('test 4 - valid book author title request');
		print('<br>');
		print($interpreter->interpret('book author title 1'));
		print('<br>');

		print('test 5 - invalid request with invalid book number');
		print('<br>');
		print($interpreter->interpret('book title 3'));
		print('<br>');

		print('test 6 - invalid request with nuo numeric book number');
		print('<br>');
		print($interpreter->interpret('book title one'));
		print('<br>');

		print('END TESTING INTERPRETER PATTERN');

	}

}

new indexInterpreter();
