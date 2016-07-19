<?php

namespace DesignPatterns\BehavioralPatterns\ChainOfResponsibility;
 
use DesignPatterns\BehavioralPatterns\ChainOfResponsibility\AbstractBookTopic;

class BookSubSubTopic extends AbstractBookTopic 
{
	private $topic;
	private $parentTopic;
	private $title;

	function __construct($topic_in, BookSubTopic $parentTopic_in) 
	{
		$this->topic = $topic_in;
		$this->parentTopic = $parentTopic_in;
		$this->title = NULL;
	}

	function getTopic() 
	{
		return $this->topic;
	}

	function getParentTopic() 
	{
		return $this->parentTopic;
	}   

	function getTitle() 
	{
		if (NULL != $this->title) {
			return $this->title;
		} 
		else {
			return $this->parentTopic->getTitle();
		}

	}

	function setTitle($title_in) 
	{
		$this->title = $title_in;
	}
	
}
