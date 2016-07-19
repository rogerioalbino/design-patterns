<?php

require '/vendor/autoload.php';

use DesignPattern\CreationalPatterns\Builder\HTMLPageBuilder;
use DesignPattern\CreationalPatterns\Builder\HTMLPageDirector;

class indexBuilder
{
	
	function __construct()
	{

		$pageBuilder = new HTMLPageBuilder();
		$pageDirector = new HTMLPageDirector($pageBuilder);

		$pageDirector->buildPage();

		$page = $pageDirector->GetPage();
		print($page->showPage());

	}

}

new indexBuilder();
