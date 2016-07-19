<?php

namespace DesignPattern\StructuralPatterns\Facade\Objects;

use DesignPattern\StructuralPatterns\Facade\Draws\Square;
use DesignPattern\StructuralPatterns\Facade\Draws\Circle;
use DesignPattern\StructuralPatterns\Facade\Draws\Rectangle;

class ShapeFacade 
{
	
	private $circle;
	private $rectangle;
	private $square;

	public function __construct()
	{
		$this->circle = new Circle();
		$this->rectangle = new Rectangle();
		$this->square = new Square();
	}

	public function drawCircle()
	{
		$this->circle->draw();
	}
	
	public function drawRectangle()
	{
		$this->rectangle->draw();
	}
	
	public function drawSquare()
	{
		$this->square->draw();
	}

}
