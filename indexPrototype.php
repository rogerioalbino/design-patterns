<?php

require '/vendor/autoload.php';

use DesignPattern\CreationalPatterns\Prototype\PHPBookPrototype;
use DesignPattern\CreationalPatterns\Prototype\SQLBookPrototype;

class indexPrototype
{
	
	function __construct()
	{

		echo('BEGIN TESTING PROTOTYPE PATTERN');
		echo('<br>');

		$phpProto = new PHPBookPrototype();
		$sqlProto = new SQLBookPrototype();

		$book1 = clone $sqlProto;
		$book1->setTitle('SQL For Cats');
		echo('Book 1 topic: '.$book1->getTopic());
		echo('<br>');
		echo('Book 1 title: '.$book1->getTitle());
		echo('<br>');

		$book2 = clone $phpProto;
		$book2->setTitle('OReilly Learning PHP 5');
		echo('Book 2 topic: '.$book2->getTopic());
		echo('<br>');
		echo('Book 2 title: '.$book2->getTitle());
		echo('<br>');

		$book3 = clone $sqlProto;
		$book3->setTitle('OReilly Learning SQL');
		echo('Book 3 topic: '.$book3->getTopic());
		echo('<br>');
		echo('Book 3 title: '.$book3->getTitle());
		echo('<br>');

		echo('END TESTING PROTOTYPE PATTERN');
		echo('<br>');
	}
}

new indexPrototype();
