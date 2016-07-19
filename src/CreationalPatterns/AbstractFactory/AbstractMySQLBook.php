<?php

namespace DesignPattern\CreationalPatterns\AbstractFactory;

use DesignPattern\CreationalPatterns\AbstractFactory\AbstractBook;

abstract class AbstractMySQLBook extends AbstractBook {
    private $subject = "MySQL";
}
