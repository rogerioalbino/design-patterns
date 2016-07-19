<?php

namespace DesignPattern\CreationalPatterns\Builder;

use DesignPattern\CreationalPatterns\Builder\AbstractPageDirector;

class HTMLPageDirector extends AbstractPageDirector 
{
	private $builder = NULL;

	public function __construct(AbstractPageBuilder $builder_in) 
	{
		$this->builder = $builder_in;
	}

	public function buildPage() 
	{
		$this->builder->setTitle('Design Patterns Builder');
		
		$this->builder->setHeading('Titulo');

		$this->builder->setText('<br>Textos1');
		$this->builder->setText('<br>Textos2');
		$this->builder->setText('<br>Textos3');

		$this->builder->formatPage();
	}

	public function getPage() 
	{
		return $this->builder->getPage();
	}

}
