<?php

namespace DesignPattern\CreationalPatterns\Singleton;

class BookSingleton
{

    private $author = 'Gamma, Helm, Johnson, and Vlissides';
    private $title  = 'Design Patterns';
    private static $book = NULL;
    private static $isLoanedOut = FALSE;

    private function __construct() 
    {}

    static function borrowBook() 
    {
      if (FALSE == self::$isLoanedOut) {
        if (NULL == self::$book) {
           self::$book = new BookSingleton();
        }

        self::$isLoanedOut = TRUE;
        return self::$book;
      } 
      else {
        return NULL;

      }

    }

    function returnBook(BookSingleton $bookReturned) 
    {
        self::$isLoanedOut = FALSE;
    }

    function getAuthor() 
    {
    	return $this->author;
    }

    function getTitle() 
    {
    	return $this->title;
    }

    function getAuthorAndTitle() 
    {
      return $this->getTitle() . ' by ' . $this->getAuthor();
    }

  }
 