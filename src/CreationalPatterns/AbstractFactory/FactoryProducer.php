<?php

namespace DesignPattern\CreationalPatterns\AbstractFactory;

class FactoryProducer 
{

	public static function getFactory($choice)
	{
		
		if($choice == ("SHAPE"))
		{
			return new ShapeFactory();
		}
		
		return null;
	}
}
