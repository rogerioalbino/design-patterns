<?php

require '/vendor/autoload.php';

use DesignPattern\CreationalPatterns\Singleton\BookBorrower;

class IndexSingleton extends BookBorrower
{
	
	function __construct()
	{

		print('BEGIN TESTING SINGLETON PATTERN');
		print('<br>');

		$bookBorrower1 = new BookBorrower();
		$bookBorrower2 = new BookBorrower();

		$bookBorrower1->borrowBook();
		print('BookBorrower1 asked to borrow the book');
		print('<br>');
		print('BookBorrower1 Author and Title: ');
		print('<br>');
		print($bookBorrower1->getAuthorAndTitle());
		print('<br>');

		$bookBorrower2->borrowBook();
		print('BookBorrower2 asked to borrow the book');
		print('<br>');
		print('BookBorrower2 Author and Title: ');
		print('<br>');
		print($bookBorrower2->getAuthorAndTitle());
		print('<br>');

		$bookBorrower1->returnBook();
		print('BookBorrower1 returned the book');
		print('<br>');

		$bookBorrower2->borrowBook();
		print('BookBorrower2 Author and Title: ');
		print('<br>');
		print($bookBorrower1->getAuthorAndTitle());
		print('<br>');

		print('END TESTING SINGLETON PATTERN');
		print('<br>');

	}

}

new IndexSingleton();
