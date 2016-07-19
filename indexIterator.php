<?php

require '/vendor/autoload.php';

use DesignPattern\BehavioralPatterns\Iterator\Book;
use DesignPattern\BehavioralPatterns\Iterator\BookList;
use DesignPattern\BehavioralPatterns\Iterator\BookListIterator;
use DesignPattern\BehavioralPatterns\Iterator\BookListReverseIterator;


class indexIterator
{
	
	function __construct()
	{

		print('BEGIN TESTING ITERATOR PATTERN');
		print('<br>');

		$firstBook = new Book('Core PHP Programming, Third Edition', 'Atkinson and Suraski');
		$secondBook = new Book('PHP Bible', 'Converse and Park');
		$thirdBook = new Book('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

		$books = new BookList();
		$books->addBook($firstBook);
		$books->addBook($secondBook);
		$books->addBook($thirdBook);

		print('Testing the Iterator');
		print('<br>');

		$booksIterator = new BookListIterator($books);

		while ($booksIterator->hasNextBook()) {
			$book = $booksIterator->getNextBook();
			print('getting next book with iterator :');
			print($book->getAuthorAndTitle());
			print('<br>');
		}

		$book = $booksIterator->getCurrentBook();
		print('getting current book with iterator :');
		print($book->getAuthorAndTitle());
		print('<br>');  

		print('Testing the Reverse Iterator');
		print('<br>');

		$booksReverseIterator = new BookListReverseIterator($books);

		while ($booksReverseIterator->hasNextBook()) {
			$book = $booksReverseIterator->getNextBook();
			print('getting next book with reverse iterator :');
			print($book->getAuthorAndTitle());
			print('<br>');
		}

		$book = $booksReverseIterator->getCurrentBook();
		print('getting current book with reverse iterator :');
		print($book->getAuthorAndTitle());
		print('<br>');

		print('END TESTING ITERATOR PATTERN');

	}

}

new indexIterator();
