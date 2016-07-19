<?php

namespace DesignPattern\BehavioralPatterns\Strategy;

class StrategyStars implements StrategyInterface 
{
    public function showTitle($book_in) 
    {
        $title = $book_in->getTitle();
        //$this->titleCount++;
        return Str_replace(' ','*',$title);
    }
}
