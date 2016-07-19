<?php

require '/vendor/autoload.php';

use DesignPatterns\BehavioralPatterns\ChainOfResponsibility\BookTopic;
use DesignPatterns\BehavioralPatterns\ChainOfResponsibility\BookSubTopic;
use DesignPatterns\BehavioralPatterns\ChainOfResponsibility\BookSubSubTopic;

class indexChainOfResponsibility
{

  function __construct()
  {

    print("BEGIN TESTING CHAIN OF RESPONSIBILITY PATTERN");
    print("");

    $bookTopic = new BookTopic("PHP 5");
    print("bookTopic before title is set:");
    print("topic: " . $bookTopic->getTopic());
    print("title: " . $bookTopic->getTitle());
    print("");

    $bookTopic->setTitle("PHP 5 Recipes by Babin, Good, Kroman, and Stephens");
    print("bookTopic after title is set: ");
    print("topic: " . $bookTopic->getTopic());
    print("title: " . $bookTopic->getTitle());
    print("");

    $bookSubTopic = new BookSubTopic("PHP 5 Patterns",$bookTopic);
    print("bookSubTopic before title is set: ");
    print("topic: " . $bookSubTopic->getTopic());
    print("title: " . $bookSubTopic->getTitle());
    print("");

    $bookSubTopic->setTitle("PHP 5 Objects Patterns and Practice by Zandstra");
    print("bookSubTopic after title is set: ");
    print("topic: ". $bookSubTopic->getTopic());
    print("title: ". $bookSubTopic->getTitle());
    print("");

    $bookSubSubTopic = new BookSubSubTopic("PHP 5 Patterns for Cats",
      $bookSubTopic);
    print("bookSubSubTopic with no title set: ");
    print("topic: " . $bookSubSubTopic->getTopic());
    print("title: " . $bookSubSubTopic->getTitle());
    print("");

    $bookSubTopic->setTitle(NULL);
    print("bookSubSubTopic with no title for set for bookSubTopic either:");
    print("topic: " . $bookSubSubTopic->getTopic());
    print("title: " . $bookSubSubTopic->getTitle());
    print("");

    print("END TESTING CHAIN OF RESPONSIBILITY PATTERN");

  }

}

new indexChainOfResponsibility();
