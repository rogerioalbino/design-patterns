<?php

require '/vendor/autoload.php';

use DesignPattern\BehavioralPatterns\Observer\PatternSubject;
use DesignPattern\BehavioralPatterns\Observer\PatternObserver;

class indexObserver
{

	function __construct()
	{

		print('BEGIN TESTING OBSERVER PATTERN');
		print('<br>');

		$patternGossiper = new PatternSubject();
		$patternGossipFan = new PatternObserver();
		$patternGossiper->attach($patternGossipFan);
		$patternGossiper->updateFavorites('abstract factory, decorator, visitor');
		$patternGossiper->updateFavorites('abstract factory, observer, decorator');
		$patternGossiper->detach($patternGossipFan);
		$patternGossiper->updateFavorites('abstract factory, observer, paisley');

		print('END TESTING OBSERVER PATTERN');
		print('<br>');

	}

}

new indexObserver();