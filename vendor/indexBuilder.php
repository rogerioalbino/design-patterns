<?php

require '/vendor/autoload.php';

use  DesignPattern\AbstractFactory\ShapeFacade;

class indexBuilder extends ShapeFacade
{
	
	function __construct()
	{
		writeln('BEGIN TESTING BUILDER PATTERN');
		writeln('');

		$pageBuilder = new HTMLPageBuilder();
		$pageDirector = new HTMLPageDirector($pageBuilder);
		$pageDirector->buildPage();
		$page = $pageDirector->GetPage();
		writeln($page->showPage());
		writeln('');

		writeln('END TESTING BUILDER PATTERN');

		function writeln($line_in) {
			echo $line_in."<br/>";
		}

	}