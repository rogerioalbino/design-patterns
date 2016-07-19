<?php

namespace DesignPattern\BehavioralPatterns\Observer;

class PatternObserver extends AbstractObserver 
{
	public function __construct() 
	{}

	public function update(AbstractSubject $subject) 
	{
		print('<br>'); 	
		print('*IN PATTERN OBSERVER - NEW PATTERN GOSSIP ALERT*');
		print('<br>');
		print(' new favorite patterns: '.$subject->getFavorites());
		print('<br>');
		print('*IN PATTERN OBSERVER - PATTERN GOSSIP ALERT OVER*');      
	}
}
