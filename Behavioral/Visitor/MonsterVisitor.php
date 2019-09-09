<?php


namespace DesignPattern\Behavioral\Visitor;


use DesignPattern\Extension\Monster\AbstractMonster;
use DesignPattern\Structural\Composite\AbstractUnit;

class MonsterVisitor extends AbstractVisitor
{
    public function visit(AbstractUnit $unit)
    {
        if ($unit instanceof AbstractMonster) {
            return $unit->getBlood();
        }
    }

    public function visitYellowSlimeMonster(AbstractMonster $abstractMonster)
    {
        return $this->visit($abstractMonster);
    }
}