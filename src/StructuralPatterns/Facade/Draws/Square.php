<?php

namespace DesignPattern\StructuralPatterns\Facade\Draws;

use DesignPattern\StructuralPatterns\Facade\Interfaces\ShapeInterface;

class Square implements ShapeInterface 
{
   // @Override
	public function draw() 
	{
		print("<br> Draw Square.");
	}

}
