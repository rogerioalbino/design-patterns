<?php

require '/vendor/autoload.php';

use DesignPattern\BehavioralPatterns\Visitor\BookVisitee;
use DesignPattern\BehavioralPatterns\Visitor\SoftwareVisitee;
use DesignPattern\BehavioralPatterns\Visitor\PlainDescriptionVisitor;
use DesignPattern\BehavioralPatterns\Visitor\FancyDescriptionVisitor;

class indexVisitor
{
	
	function __construct()
	{

		print('BEGIN TESTING VISITOR PATTERN');
		print("<br>");

		$book = new BookVisitee('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
		$software = new SoftwareVisitee('Zend Studio', 'Zend Technologies', 'www.zend.com');
		$plainVisitor = new PlainDescriptionVisitor();
		$fancyVisitor = new FancyDescriptionVisitor();

		$this->acceptVisitor($book, $plainVisitor);
		print('plain description of book: ');
		print($plainVisitor->getDescription());
		print("<br>");

		$this->acceptVisitor($software, $plainVisitor);
		print('plain description of software: ');
		print($plainVisitor->getDescription());
		print("<br>");

		$this->acceptVisitor($book, $fancyVisitor);
		print('fancy description of book: ');
		print($fancyVisitor->getDescription());
		print("<br>");

		$this->acceptVisitor($software,$fancyVisitor);
		print('fancy description of software: ');
		print($fancyVisitor->getDescription());
		print("<br>");

		print('END TESTING VISITOR PATTERN');
		print("<br>");

	}

	//double dispatch any visitor and visitee objects
	function acceptVisitor(Visitee $visitee_in, Visitor $visitor_in) 
	{
		$visitee_in->accept($visitor_in);
	}

}

new indexVisitor();
