<?php

namespace DesignPattern\StructuralPatterns\Facade\Draws;

use DesignPattern\StructuralPatterns\Facade\Interfaces\ShapeInterface;

class Circle implements ShapeInterface {

   // @Override
	public function draw() 
	{
		print("<br> Draw Circle.");
	}
}
