<?php

require '/vendor/autoload.php';

use  DesignPattern\StructuralPatterns\Facade\Objects\ShapeFacade;

class IndexFacade extends ShapeFacade
{
	
	function __construct()
	{

		$shape = new ShapeFacade();

		$shape->drawCircle();
		$shape->drawRectangle();
		$shape->drawSquare();		
	}

}

new IndexFacade();
