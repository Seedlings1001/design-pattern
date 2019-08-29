<?php


namespace DesignPattern\Behavioral\Visitor;


use DesignPattern\Structural\Composite\AbstractUnit;

abstract class AbstractVisitor
{
    abstract function visit(AbstractUnit $unit);
}